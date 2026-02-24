<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Check if a window has focus and set focus to a window
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Check if the main visible window has focus
echo "Example 1: Check if the main visible window has focus\n";
$hasFocusResult = $mainWindow->is_focus();
if (!$hasFocusResult) {
    echo "Window does not have focus\n";
} else {
    echo "Window already has focus\n";
}

// Example 2: Set focus to the window
echo "Example 2: Set focus to the window\n";
$setFocusResult = $mainWindow->focus();
if ($setFocusResult) {
    echo "Focus set to window successfully\n";
} else {
    echo "Failed to set focus to window\n";
}

// Example 3: Check if the window has focus after setting it
echo "Example 3: Check if the window has focus after setting it\n";
$hasFocusAfterResult = $mainWindow->is_focus();
if ($hasFocusAfterResult) {
    echo "Window now has focus\n";
} else {
    echo "Window still does not have focus\n";
}

// Quit the application
WINDOW::$app->quit();
?>