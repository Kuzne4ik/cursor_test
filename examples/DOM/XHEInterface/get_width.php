<?php

// Scenario: For current page, find a DOM element and get its width
// Description: For current page, find a DOM element and get its width
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get width of element with href equal to TEST_SITE_URL

// Get element by href attribute
$targetElement = DOM::$element->get_by_attribute("href", TEST_SITE_URL);

// Check that the DOM element is received
if ($targetElement->inner_number != -1)
{
    // Get width of the element
    echo($targetElement->get_width() . "\n");
}

// Stop the application
WINDOW::$app->quit();
?>