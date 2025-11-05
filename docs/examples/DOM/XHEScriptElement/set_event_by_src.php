<?php
// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции set_event_by_src
// Задать event у скрипта с заданным атрибутом src

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Set event attribute for a script with specific src
$script_src = "https://example.com/js/main.js";
$event_value = "onclick";
$result = DOM::$script->set_event_by_src($script_src, $event_value);

// Display the result
if ($result) {
    echo "Successfully set event to '{$event_value}' for script with src '{$script_src}'\n";
} else {
    echo "Failed to set event attribute for script with src '{$script_src}'\n";
}

// Example with frame parameter (if needed)
$script_src = "https://example.com/js/frame-script.js";
$event_value = "onload";
$frame_number = "0";
$result_frame = DOM::$script->set_event_by_src($script_src, $event_value, $frame_number);

if ($result_frame) {
    echo "Successfully set event to '{$event_value}' for script with src '{$script_src}' in frame {$frame_number}\n";
} else {
    echo "Failed to set event attribute for script with src '{$script_src}' in frame {$frame_number}\n";
}

// Quit the application
WINDOW::$app->quit();
?>