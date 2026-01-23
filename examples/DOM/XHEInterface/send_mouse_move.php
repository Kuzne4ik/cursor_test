<?php

// Scenario: Send mouse move event to a DOM element
// Description: For current page, find DOM elements and send mouse move events to them
// Classes used: XHEButton, XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Send mouse move event to DOM elements

// Navigate to Google
echo WEB::$browser->navigate("http://google.ru") . "\n";

// Move mouse to 'I'm Feeling Lucky' button
$button = DOM::$button->get_by_number(3);
if ($button->inner_number != -1) {
    echo "2. Move mouse to 'I'm Feeling Lucky' button: ";
    echo $button->send_mouse_move(5, 5) . " ";
}

// Stop application
WINDOW::$app->quit();
?>