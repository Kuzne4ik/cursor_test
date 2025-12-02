<?php
// Scenario: Get the htmlFor attribute of a script element by its number
// Description: Demonstrates how to retrieve the htmlFor attribute value from a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication

// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции get_htmlFor_by_number
// Получить значение атрибута htmlFor у скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js(3);

// Example 1: Get htmlFor attribute value for the first script element
$script_number = 0;
$htmlFor_value = DOM::$script->get_htmlFor_by_number($script_number);

// Display the result
if ($htmlFor_value !== false) {
    echo "HtmlFor attribute for script number {$script_number}: {$htmlFor_value}\n";
} else {
    echo "Failed to get htmlFor attribute for script number {$script_number} or script not found\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$frame_number = "0";
$htmlFor_value_frame = DOM::$script->get_htmlFor_by_number($script_number, $frame_number);

if ($htmlFor_value_frame !== false) {
    echo "HtmlFor attribute for script number {$script_number} in frame {$frame_number}: {$htmlFor_value_frame}\n";
} else {
    echo "Failed to get htmlFor attribute for script number {$script_number} in frame {$frame_number} or script not found\n";
}

// Quit the application
WINDOW::$app->quit();
?>