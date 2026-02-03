<?php
// Scenario: Set the htmlFor attribute of a script element by its number
// Description: Demonstrates how to set the htmlFor attribute value for a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции set_htmlFor_by_number
// Задать атрибут htmlFor у скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Set htmlFor attribute for the first script element
$script_number = 0;
$htmlFor_value = "elementId";
$result = DOM::$script->set_htmlFor_by_number($script_number, $htmlFor_value);

// Display the result
if ($result) {
    echo "Successfully set htmlFor to '{$htmlFor_value}' for script number {$script_number}\n";
} else {
    echo "Failed to set htmlFor attribute for script number {$script_number}\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$htmlFor_value = "frameElementId";
$frame_number = "0";
$result_frame = DOM::$script->set_htmlFor_by_number($script_number, $htmlFor_value, $frame_number);

if ($result_frame) {
    echo "Successfully set htmlFor to '{$htmlFor_value}' for script number {$script_number} in frame {$frame_number}\n";
} else {
    echo "Failed to set htmlFor attribute for script number {$script_number} in frame {$frame_number}\n";
}

// Quit the application
WINDOW::$app->quit();
?>