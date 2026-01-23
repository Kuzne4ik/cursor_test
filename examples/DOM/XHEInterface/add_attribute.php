<?php

// Scenario: For the current page, find a DOM element and add a new attribute to it
// Description: For the current Browser page, find a DOM element <a> and get it as XHEInterface, and add a new attribute 'label1' with value 'value1' to it
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

// Example 1: Get the anchor object and add a new attribute 'label1' with value 'value1' to it

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchorInterface = DOM::$anchor->get_by_name("list");

// Check that the DOM element is received
if ($targetAnchorInterface->inner_number != -1)
{
    // For the found anchor object, add a new attribute 'label1' with value 'value1'
    $targetAnchorInterface->add_attribute("label1", "value1");
}


// Stop the application
WINDOW::$app->quit();
?>
