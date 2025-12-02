<?php
// Scenario: Get the type attribute of a script element by its src
// Description: Demonstrates how to retrieve the type attribute value from a script element based on its src attribute
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication

// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Пример использования функции get_type_by_src
// Получить значение атрибута type скрипта с заданным атрибутом src

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get type attribute value for a script with specific src
$script_src = "src";
$type_value = DOM::$script->get_type_by_src($script_src);

// Display result
if ($type_value !== false) {
    echo "Type attribute for script with src '{$script_src}': {$type_value}\n";
} else {
    echo "Failed to get type attribute for script with src '{$script_src}' or script not found\n";
}

// Example 2: Get type attribute value for another script
$script_src = "src";
$type_value = DOM::$script->get_type_by_src($script_src);

// Display result
if ($type_value !== false) {
    echo "Type attribute for script with src '{$script_src}': {$type_value}\n";
} else {
    echo "Failed to get type attribute for script with src '{$script_src}' or script not found\n";
}

// Example with frame parameter (if needed)
$script_src = "src";
$frame_number = "0";
$type_value_frame = DOM::$script->get_type_by_src($script_src, $frame_number);

if ($type_value_frame !== false) {
    echo "Type attribute for script with src '{$script_src}' in frame {$frame_number}: {$type_value_frame}\n";
} else {
    echo "Failed to get type attribute for script with src '{$script_src}' in frame {$frame_number} or script not found\n";
}

// Quit application
WINDOW::$app->quit();
?>