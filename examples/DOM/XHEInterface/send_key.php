<?php

// Scenario: Send key event to a DOM element
// Description: For current page, find an input element and send a key event to it
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEKeyboard, XHEApplication

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

// Example 1: Send key event to an input element

// Navigate to Yandex
echo WEB::$browser->navigate("http://ya.ru") . "\n";

// Get DOM element <input> by number 0
$obj = DOM::$input->get_by_number(0);
echo $obj->inner_number . "\n";

// Check that DOM element was found
if ($obj->inner_number != -1) {
    // Make search "sr"
    SYSTEM::$keyboard->set_current_language("en");
    echo $obj->send_key("s", true) . " ";
    echo $obj->send_key(114, false) . " ";
    sleep(1);
    echo $obj->send_key(13, false);
}

// Stop the application
WINDOW::$app->quit();
?>