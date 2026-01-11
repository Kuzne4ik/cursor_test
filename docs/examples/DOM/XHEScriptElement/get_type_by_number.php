<?php
// Scenario: Get the type attribute of a script element by its number
// Description: Demonstrates how to retrieve the type attribute value from a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_type_by_number
// Получить значение атрибута type скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get type attribute value for the first script element
$script_number = 0;
$type_value = DOM::$script->get_type_by_number($script_number);

// Display result
if ($type_value !== false) {
    echo "Type attribute for script number {$script_number}: {$type_value}\n";
} else {
    echo "Failed to get type attribute for script number {$script_number} or script not found\n";
}

// Example 2: Get type attribute value for the second script element
$script_number = 1;
$type_value = DOM::$script->get_type_by_number($script_number);

// Display result
if ($type_value !== false) {
    echo "Type attribute for script number {$script_number}: {$type_value}\n";
} else {
    echo "Failed to get type attribute for script number {$script_number} or script not found\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$frame_number = "0";
$type_value_frame = DOM::$script->get_type_by_number($script_number, $frame_number);

if ($type_value_frame !== false) {
    echo "Type attribute for script number {$script_number} in frame {$frame_number}: {$type_value_frame}\n";
} else {
    echo "Failed to get type attribute for script number {$script_number} in frame {$frame_number} or script not found\n";
}

// Quit application
WINDOW::$app->quit();
?>