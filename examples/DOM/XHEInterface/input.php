<?php

// Scenario: Input text into a DOM element
// Description: For current page, find an input element and input text into it
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Input text into an input element

// Navigate to yandex
echo WEB::$browser->navigate("http://ya.ru");

// Get DOM element <input> by number 0
$targetInput = DOM::$input->get_by_number(0);

// Check that the DOM element was found
if ($targetInput->inner_number != -1) {
    echo $targetInput->inner_number;
    
    // Input text without pause
    echo $targetInput->input("Web abcde template");
    
    // Input text with 100ms pause between characters
    echo $targetInput->input(" abc template abcdefghijklmnopqrstuvwxyz", 100);
}

// Stop the application
WINDOW::$app->quit();
?>