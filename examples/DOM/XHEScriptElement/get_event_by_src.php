<?php
// Scenario: Get the event attribute of a script element by its src
// Description: Demonstrates how to retrieve the event attribute value from a script element based on its src attribute
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_event_by_src
// Получить event у скрипта с заданным атрибутом src

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get event attribute value for a script with specific src
$script_src = "https://example.com/js/main.js";
$event_value = DOM::$script->get_event_by_src($script_src);

// Display result
if ($event_value !== false) {
    echo "Event attribute for script with src '{$script_src}': {$event_value}\n";
} else {
    echo "Failed to get event attribute for script with src '{$script_src}' or script not found\n";
}

// Example with frame parameter (if needed)
$script_src = "https://example.com/js/frame-script.js";
$frame_number = "0";
$event_value_frame = DOM::$script->get_event_by_src($script_src, $frame_number);

if ($event_value_frame !== false) {
    echo "Event attribute for script with src '{$script_src}' in frame {$frame_number}: {$event_value_frame}\n";
} else {
    echo "Failed to get event attribute for script with src '{$script_src}' in frame {$frame_number} or script not found\n";
}

// Quit application
WINDOW::$app->quit();
?>