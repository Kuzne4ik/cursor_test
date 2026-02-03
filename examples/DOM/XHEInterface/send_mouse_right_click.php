<?php

// Scenario: Send mouse right click event to a DOM element
// Description: For current page, find a button element and send a mouse right click event to it
// Classes used: XHEElement, XHEInterface, XHEBrowser, XHEKeyboard, XHEApplication

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

// Example 1: Send mouse right click event to a button element

// Navigate to Google
echo WEB::$browser->navigate("http://www.google.ru") . "\n";

// Get DOM element by name "btnI"
$targetElement = DOM::$element->get_by_name("btnI");

// Check that DOM element was found
if ($targetElement->inner_number != -1) {
    // Call browser context menu
    echo "2. Call browser context menu: ";
    echo $targetElement->send_mouse_right_click(1, 1) . "\n";
}

// Stop application
WINDOW::$app->quit();
?>