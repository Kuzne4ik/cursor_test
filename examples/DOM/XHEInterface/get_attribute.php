<?php

// Scenario: For the current page, find a DOM element and get the value of its attribute
// Description: For the current page, find a DOM element <a> and get the value of its attribute
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get the DOM element anchor by id with text 'onclick' and get the values of its id attribute

// Get the anchor object by id with text 'onclick', attribute value is not an exact match and get the anchor object as XHEInterface
$targetAnchor = DOM::$anchor->get_by_attribute('id', 'onclick', false);

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1) {
    // For the found image object, get the value of its 'id' attribute, as a variable
    $targetImageInterfaceAlt = $targetAnchor->get_attribute('id');
}

// Stop the application
WINDOW::$app->quit();
?>