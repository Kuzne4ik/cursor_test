<?php

// Scenario: Perform mouse right up event on a DOM element
// Description: For current page, find a DOM element and perform a mouse right up event on it
// Classes used: XHEElement, XHEInterface, XHEBrowser, XHEApplication, XHEKeyboard

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

// Example 1: Perform mouse right down and up events on a button element

// Navigate to google
echo WEB::$browser->navigate("http://www.google.ru");

// Get DOM element by name
$targetElement = DOM::$element->get_by_name("btnI", false);

// Check that the DOM element was found
if ($targetElement->inner_number != -1) {
    // Perform mouse right down event with offset (100,100)
    echo $targetElement->mouse_right_down(100,100);
    
    // Wait for 2 seconds
    sleep(2);
    
    // Perform mouse right up event with offset (100,100)
    var_export($targetElement->mouse_right_up(100,100));
    
    // Wait for 3 seconds
    sleep(3);
    
    // Press Esc key to close context menu
    var_export(SYSTEM::$keyboard->key(27));
}

// Stop the application
WINDOW::$app->quit();
?>