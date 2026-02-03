<?php
// Scenario: Get the defer attribute of a script element by its number
// Description: Demonstrates how to retrieve the defer attribute value from a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_defer_by_number
// Получить значение атрибута defer у скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get defer attribute value for the first script element
$script_number = 0;
$defer_value = DOM::$script->get_defer_by_number($script_number);

// Display the result
if ($defer_value !== false) {
    echo "Defer attribute for script number {$script_number}: " . ($defer_value ? "true" : "false") . "\n";
} else {
    echo "Failed to get defer attribute for script number {$script_number} or script not found\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$frame_number = "1";
$defer_value_frame = DOM::$script->get_defer_by_number($script_number, $frame_number);
 
if ($defer_value_frame !== false) {
    echo "Defer attribute for script number {$script_number} in frame {$frame_number}: " . ($defer_value_frame ? "true" : "false") . "\n";
} else {
    echo "Failed to get defer attribute for script number {$script_number} in frame {$frame_number} or script not found\n";
}

// Quit the application
WINDOW::$app->quit();
?>