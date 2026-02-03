<?php

// Scenario: Perform mouse left down and up events on a DOM element
// Description: For current page, find a DOM element and perform mouse left down and up events on it
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

// Example 1: Perform mouse left down and up events on a button element

// Navigate to google
echo WEB::$browser->navigate("http://google.ru");

// Get DOM element by name
$targetElement = DOM::$element->get_by_name("btnI");

// Check that the DOM element was found
if ($targetElement->inner_number != -1) {
    // Perform mouse left down event with offset (1,1)
    echo $targetElement->mouse_left_down(1,1);
    
    // Wait for 3 seconds
    sleep(3);
    
    // Perform mouse left up event with offset (1,1)
    echo $targetElement->mouse_left_up(1,1);
}

// Stop the application
WINDOW::$app->quit();
?>