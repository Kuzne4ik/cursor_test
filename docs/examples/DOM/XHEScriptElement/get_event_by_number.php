<?php
// Scenario: Get the event attribute of a script element by its number
// Description: Demonstrates how to retrieve the event attribute value from a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication

// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Пример использования функции get_event_by_number
// Получить event у скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get event attribute value for the first script element
$script_number = 0;
$event_value = DOM::$script->get_event_by_number($script_number);

// Display the result
if ($event_value !== false) {
    echo "Event attribute for script number {$script_number}: {$event_value}\n";
} else {
    echo "Failed to get event attribute for script number {$script_number} or script not found\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$frame_number = "0";
$event_value_frame = DOM::$script->get_event_by_number($script_number, $frame_number);
 
if ($event_value_frame !== false) {
    echo "Event attribute for script number {$script_number} in frame {$frame_number}: {$event_value_frame}\n";
} else {
    echo "Failed to get event attribute for script number {$script_number} in frame {$frame_number} or script not found\n";
}

// Quit the application
WINDOW::$app->quit();
?>