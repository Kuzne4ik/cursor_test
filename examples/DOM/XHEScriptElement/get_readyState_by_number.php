<?php
// Scenario: Get the readyState property of a script element by its number
// Description: Demonstrates how to retrieve the readyState property value from a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_readyState_by_number
// Получить значение свойства readyState у скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get readyState property value for the first script element
$script_number = 0;
$readyState_value = DOM::$script->get_readyState_by_number($script_number);

// Display result
if ($readyState_value !== false) {
    echo "ReadyState for script number {$script_number}: {$readyState_value}\n";
} else {
    echo "Failed to get readyState for script number {$script_number} or script not found\n";
}

// Example 2: Get readyState property value for the second script element
$script_number = 1;
$readyState_value = DOM::$script->get_readyState_by_number($script_number);

// Display result
if ($readyState_value !== false) {
    echo "ReadyState for script number {$script_number}: {$readyState_value}\n";
} else {
    echo "Failed to get readyState for script number {$script_number} or script not found\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$frame_number = "0";
$readyState_value_frame = DOM::$script->get_readyState_by_number($script_number, $frame_number);

if ($readyState_value_frame !== false) {
    echo "ReadyState for script number {$script_number} in frame {$frame_number}: {$readyState_value_frame}\n";
} else {
    echo "Failed to get readyState for script number {$script_number} in frame {$frame_number} or script not found\n";
}

// Quit application
WINDOW::$app->quit();
?>