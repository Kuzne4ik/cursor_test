<?php
// Scenario: Set the src attribute of a script element by its number
// Description: Demonstrates how to set the src attribute value for a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication

// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции set_src_by_number
// Задать атрибут src у скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Set src attribute for the first script element
$script_number = 0;
$src_value = "https://example.com/js/new-main.js";
$result = DOM::$script->set_src_by_number($script_number, $src_value);

// Display the result
if ($result) {
    echo "Successfully set src to '{$src_value}' for script number {$script_number}\n";
} else {
    echo "Failed to set src attribute for script number {$script_number}\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$src_value = "https://example.com/js/frame-script.js";
$frame_number = "0";
$result_frame = DOM::$script->set_src_by_number($script_number, $src_value, $frame_number);

if ($result_frame) {
    echo "Successfully set src to '{$src_value}' for script number {$script_number} in frame {$frame_number}\n";
} else {
    echo "Failed to set src attribute for script number {$script_number} in frame {$frame_number}\n";
}

// Quit the application
WINDOW::$app->quit();
?>