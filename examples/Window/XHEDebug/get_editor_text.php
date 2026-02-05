<?php
// Scenario: Get text from the editor
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Get selected text
echo "Example 1: Get selected text\n";
$selectedText = WINDOW::$debug->get_editor_text(true);
echo "Selected text: $selectedText\n";

// Example 2: Get all text
echo "\nExample 2: Get all text\n";
$allText = WINDOW::$debug->get_editor_text();
echo "All text: $allText\n";

// Quit the application
WINDOW::$app->quit();
?>