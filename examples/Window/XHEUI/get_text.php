<?php
// Scenario: Demonstrates how to get text content from a UI element and input text

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Open Notepad for text input demonstration
$notepadPath = "C:\\Windows\\System32\\notepad.exe";
WINDOW::$app->shell_execute("open", $notepadPath);
sleep(2);

// Step: Get Notepad UI element
$notepadWindow = WINDOW::$window->get_by_class("Notepad", true, false);
$notepadElement = $notepadWindow->get_ui_element();
$notepadChild = $notepadElement->get_child();

// Example 1: Input text into Notepad
$firstText = "12345";
$result1 = $notepadChild->input($firstText);

if ($result1) {
    echo("Example 1: Successfully input first text: '$firstText'\n");
} else {
    echo("Example 1: Failed to input first text\n");
}

// Example 2: Append additional text
$secondText = " 5678";
$result2 = $notepadChild->input($secondText, false);

if ($result2) {
    echo("Example 2: Successfully appended text: '$secondText'\n");
} else {
    echo("Example 2: Failed to append text\n");
}

// Example 3: Get all text content
$allText = $notepadChild->get_text();

if ($allText !== null) {
    echo("Example 3: Successfully retrieved text content\n");
    echo("Complete text: '$allText'\n");
} else {
    echo("Example 3: Failed to retrieve text content\n");
}

// Quit the application
WINDOW::$app->quit();
?>