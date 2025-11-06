<?php

// Scenario: For the current page, find a DOM element and ensure that this element falls into the visible area of the page
// Description: For the current page, find a DOM element <a> and ensure that this element falls into the visible area of the page
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get the anchor object by serial number 1 among inputs of this type and ensure that this element falls into the visible area of the page.

// Get the anchor object by serial number 1 among inputs of this type and get it as XHEInterface.
$targetAnchor = DOM::$anchor->get_by_number(1);

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // For the found anchor, execute the command and get the method execution result as a variable.
    // The execution result will be assigned to a variable of type bool.
    // If the variable value is true, then the DOM element is in the visible area of the Browser page.
    // If the variable value is false, then the DOM element is not in the visible area of the Browser page.
    $elementIsVisibled = $targetAnchor->ensure_visible();
}

// Stop the application
WINDOW::$app->quit();
?>