<?php
// Scenario: Get the readyState property of a script element by its src
// Description: Demonstrates how to retrieve the readyState property value from a script element based on its src attribute
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication

// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Пример использования функции get_readyState_by_src
// Получить значение свойства readyState у скрипта с заданным src

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get readyState property value for a script with specific src
$script_src = "https://example.com/js/main.js";
$readyState_value = DOM::$script->get_readyState_by_src($script_src);

// Display result
if ($readyState_value !== false) {
    echo "ReadyState for script with src '{$script_src}': {$readyState_value}\n";
} else {
    echo "Failed to get readyState for script with src '{$script_src}' or script not found\n";
}

// Example 2: Get readyState property value for another script
$script_src = "https://example.com/js/secondary.js";
$readyState_value = DOM::$script->get_readyState_by_src($script_src);

// Display result
if ($readyState_value !== false) {
    echo "ReadyState for script with src '{$script_src}': {$readyState_value}\n";
} else {
    echo "Failed to get readyState for script with src '{$script_src}' or script not found\n";
}

// Example with frame parameter (if needed)
$script_src = "https://example.com/js/frame-script.js";
$frame_number = "0";
$readyState_value_frame = DOM::$script->get_readyState_by_src($script_src, $frame_number);

if ($readyState_value_frame !== false) {
    echo "ReadyState for script with src '{$script_src}' in frame {$frame_number}: {$readyState_value_frame}\n";
} else {
    echo "Failed to get readyState for script with src '{$script_src}' in frame {$frame_number} or script not found\n";
}

// Quit application
WINDOW::$app->quit();
?>