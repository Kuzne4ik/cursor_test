<?php

// Scenario: Send key down event to a DOM element
// Description: For current page, find an input element and send a key down event to it
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

// Example 1: Send key down event to an input element

// Navigate to Yandex
WEB::$browser->navigate("https://ya.ru");

// Get DOM element <input> by number 0
$targetInput = DOM::$input->get_by_number(0);
echo $targetInput->inner_number . "\n";

// Check that DOM element was found
if ($targetInput->inner_number != -1) {
    // Enter s (code 83)
    SYSTEM::$keyboard->set_current_language("en");
    var_export($targetInput->send_key_down(83, false));
    echo("\n");
    var_export($targetInput->send_key_up(83, false));
}

// Stop the application
WINDOW::$app->quit();
?>