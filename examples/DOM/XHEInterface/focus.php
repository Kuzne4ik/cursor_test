<?php

// Scenario: Set focus to a DOM element
// Description: For current page, find a DOM element and set focus to it
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get anchor object by 'src' attribute and perform focus on it

// Get the anchor object as XHEInterface by 'src' attribute, not strict match of attribute value
$targetAnchorInterface = DOM::$anchor->get_by_src("list_id", false);

// Check that the DOM element is received
if ($targetAnchorInterface->inner_number != -1) {
    // For the found anchor object, perform focus
    $targetAnchorInterface->focus();
}

// Stop the application
WINDOW::$app->quit();
?>