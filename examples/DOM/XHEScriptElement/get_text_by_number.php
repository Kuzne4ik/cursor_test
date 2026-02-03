<?php
// Scenario: Get the text content of a script element by its number
// Description: Demonstrates how to retrieve the text content from a script element based on its position number on the page
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_text_by_number
// Получить текст скрипта по номеру

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get text content for the first script element
$script_number = 0;
$text_value = DOM::$script->get_text_by_number($script_number);

// Display result
if ($text_value !== false) {
    echo "Text content for script number {$script_number}:\n";
    echo "<pre>" . htmlspecialchars($text_value) . "</pre>\n";
} else {
    echo "Failed to get text content for script number {$script_number} or script not found\n";
}

// Example 2: Get text content for the second script element
$script_number = 1;
$text_value = DOM::$script->get_text_by_number($script_number);

// Display result
if ($text_value !== false) {
    echo "Text content for script number {$script_number}:\n";
    echo "<pre>" . htmlspecialchars($text_value) . "</pre>\n";
} else {
    echo "Failed to get text content for script number {$script_number} or script not found\n";
}

// Example with frame parameter (if needed)
$script_number = 0;
$frame_number = "0";
$text_value_frame = DOM::$script->get_text_by_number($script_number, $frame_number);

if ($text_value_frame !== false) {
    echo "Text content for script number {$script_number} in frame {$frame_number}:\n";
    echo "<pre>" . htmlspecialchars($text_value_frame) . "</pre>\n";
} else {
    echo "Failed to get text content for script number {$script_number} in frame {$frame_number} or script not found\n";
}

// Quit application
WINDOW::$app->quit();
?>