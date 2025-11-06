<?php

// Scenario: Simulate key press on a DOM element
// Description: For current page, find an input element and simulate a key press
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication, XHEKeyboard

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

// Example 1: Simulate key press on an input element

// Navigate to yandex
echo WEB::$browser->navigate("http://ya.ru");

// Get DOM element <input> by number 0
$targetInput = DOM::$input->get_by_number(0);

// Check that the DOM element was found
if ($targetInput->inner_number != -1) {
    echo $targetInput->inner_number;
    
    // Set keyboard language to English
    SYSTEM::$keyboard->set_current_language("en");
    
    // Set the application window to foreground
    WINDOW::$app->set_foreground_window();
    
    // Set focus to the input element and press key 's' (code 83)
    echo $targetInput->focus() . " " . $targetInput->key(83);
}

// Stop the application
WINDOW::$app->quit();
?>