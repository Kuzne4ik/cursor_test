<?php
// Scenario: Get the text content of a script element by its src
// Description: Demonstrates how to retrieve the text content from a script element based on its src attribute
// Classes used: DOM, XHEScriptElement, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_text_by_src
// Получить текст скрипта с заданным атрибутом src

// Navigate to a webpage with script elements
WEB::$browser->navigate(TEST_POLYGON_URL . "call_js.html");
WEB::$browser->wait_js();

// Example 1: Get text content for a script with specific src
$script_src = "src";
$text_value = DOM::$script->get_text_by_src($script_src);

// Display result
if ($text_value !== false) {
    echo "Text content for script with src '{$script_src}':\n";
    echo "<pre>" . htmlspecialchars($text_value) . "</pre>\n";
} else {
    echo "Failed to get text content for script with src '{$script_src}' or script not found\n";
}

// Example 2: Get text content for another script
$script_src = "src";
$text_value = DOM::$script->get_text_by_src($script_src);

// Display result
if ($text_value !== false) {
    echo "Text content for script with src '{$script_src}':\n";
    echo "<pre>" . htmlspecialchars($text_value) . "</pre>\n";
} else {
    echo "Failed to get text content for script with src '{$script_src}' or script not found\n";
}

// Example with frame parameter (if needed)
$script_src = "src";
$frame_number = "0";
$text_value_frame = DOM::$script->get_text_by_src($script_src, $frame_number);

if ($text_value_frame !== false) {
    echo "Text content for script with src '{$script_src}' in frame {$frame_number}:\n";
    echo "<pre>" . htmlspecialchars($text_value_frame) . "</pre>\n";
} else {
    echo "Failed to get text content for script with src '{$script_src}' in frame {$frame_number} or script not found\n";
}

// Quit application
WINDOW::$app->quit();
?>