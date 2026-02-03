<?php

// Scenario: Send mouse move to event to a DOM element
// Description: For current page, find DOM elements and send mouse move to events to them
// Classes used: XHEElement, XHEAnchor, XHEInterface, XHEBrowser, XHEMouse, XHEApplication

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

// Example 1: Send mouse move to event to DOM elements

// Navigate to Google
echo WEB::$browser->navigate("http://google.ru") . "\n";

// Move mouse to 'I'm Feeling Lucky' button
$targetElement = DOM::$element->get_by_name("btnI");
if ($targetElement->inner_number != -1) {
    echo "2. Move mouse to 'I'm Feeling Lucky' button: ";
    echo $targetElement->send_mouse_move_to(1, 1) . "\n";
    sleep(1);
}

// Stop application
WINDOW::$app->quit();
?>