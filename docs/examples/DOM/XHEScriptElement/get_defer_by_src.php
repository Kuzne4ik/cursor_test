<?php
// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции get_defer_by_src
// Получить значение атрибута defer у скрипта с заданным атрибутом src

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get defer attribute value for a script with specific src
$script_src = "src";
$defer_value = DOM::$script->get_defer_by_src($script_src);

// Display the result
if ($defer_value !== false) {
    echo "Defer attribute for script with src '{$script_src}': " . ($defer_value ? "true" : "false") . "\n";
} else {
    echo "Failed to get defer attribute for script with src '{$script_src}' or script not found\n";
}

// Example with frame parameter (if needed)
$script_src = "src";
$frame_number = "0";
$defer_value_frame = DOM::$script->get_defer_by_src($script_src, $frame_number);
 
if ($defer_value_frame !== false) {
    echo "Defer attribute for script with src '{$script_src}' in frame {$frame_number}: " . ($defer_value_frame ? "true" : "false") . "\n";
} else {
    echo "Failed to get defer attribute for script with src '{$script_src}' in frame {$frame_number} or script not found\n";
}

// Quit the application
WINDOW::$app->quit();
?>