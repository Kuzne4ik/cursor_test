<?php
// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции set_text_by_src
// Задать текст у скрипта с заданным атрибутом src

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Set text content for a script with specific src
$script_src = "src";
$text_value = "function helloWorld() {\n    console.log('Hello, World!');\n}";
$result = DOM::$script->set_text_by_src($script_src, $text_value);

// Display the result
if ($result) {
    echo "Successfully set text content for script with src '{$script_src}'\n";
} else {
    echo "Failed to set text content for script with src '{$script_src}'\n";
}

// Example with frame parameter (if needed)
$script_src = "src";
$text_value = "function frameScript() {\n    console.log('Frame script executed');\n}";
$frame_number = "0";
$result_frame = DOM::$script->set_text_by_src($script_src, $text_value, $frame_number);

if ($result_frame) {
    echo "Successfully set text content for script with src '{$script_src}' in frame {$frame_number}\n";
} else {
    echo "Failed to set text content for script with src '{$script_src}' in frame {$frame_number}\n";
}

// Quit the application
WINDOW::$app->quit();
?>