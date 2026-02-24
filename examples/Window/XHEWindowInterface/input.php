<?php
// Scenario: Input text into Notepad application
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get Notepad window interface
$windowClass = "Notepad";
$notebook = WINDOW::$window->get_by_class($windowClass, false, true, true);

// Step: Get the first child element (text area)
$childNumber = 0;
$textArea = $notebook->get_child_by_number($childNumber);

// Step: Define input text
$inputText = "abcd\"ef(\"gh ABC\n123) абвгдеёжзийклм\"нопрстуфхцчщы\"ьъэю АБВ";

// Example 1: Input text into Notepad
echo "Example 1: Input text into Notepad\n";
$inputResult = $textArea->input($inputText);
if ($inputResult) {
    echo "Text input successfully\n";
} else {
    echo "Failed to input text\n";
}

// Quit the application
WINDOW::$app->quit();
?>