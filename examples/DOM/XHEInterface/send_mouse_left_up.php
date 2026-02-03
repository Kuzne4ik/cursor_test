<?php

// Scenario: Send mouse left up event to a DOM element
// Description: For current page, find a button element and send a mouse left up event to it
// Classes used: XHEButton, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Send mouse left up event to a button element

// Navigate to Google
echo WEB::$browser->navigate("http://google.ru") . "\n";

// Get DOM element <button> by number 3
$targetButton = DOM::$button->get_by_number(3);

// Check that DOM element was found
if ($targetButton->inner_number != -1) {
    // Press mouse with a pause before releasing on 'I'm Feeling Lucky' button
    echo "2. Press mouse with a pause before releasing on 'I'm Feeling Lucky' button: ";
    echo $targetButton->send_mouse_left_down(5, 5) . " ";
    sleep(3);
    echo $targetButton->send_mouse_left_up(5, 5) . "\n";
}

// Stop application
WINDOW::$app->quit();
?>