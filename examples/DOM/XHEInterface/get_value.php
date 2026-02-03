<?php

// Scenario: For current page, find a DOM element and get its value
// Description: For current page, find a DOM element and get its value
// Classes used: XHEElement, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "button.html");

// Example 1: Get value of element with name equal to btn1

// Get element by name
$targetElement = DOM::$element->get_by_name("btn1");

// Check that DOM element was found
if ($targetElement->inner_number != -1)
{
    // Get value of element
    echo($targetElement->get_value() . "\n");
}

// Stop application
WINDOW::$app->quit();
?>