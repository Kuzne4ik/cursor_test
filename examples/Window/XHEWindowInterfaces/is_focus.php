<?php
// Scenario: Checking if a window has focus and setting focus to a window.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "localhost"
$windowText = "localhost";
$targetWindows = WINDOW::$window->get_all_by_text($windowText);
if ($targetWindows->count() > 0) {
    $targetWindow = $targetWindows[0];
    echo "Found window with text: '$windowText'.\n";
    
    // Example is_focus: Check if the window has focus
    echo "Example is_focus: Check if window has focus: ";
    $hasFocus = $targetWindow->is_focus();
    if ($hasFocus) {
        echo "Window has focus.\n";
    } else {
        echo "Window does not have focus.\n";
    }
    
    // If window doesn't have focus, set focus to it
    if (!$hasFocus) {
        // step 2: Set focus to the window
        echo "Step: Set focus to the window: ";
        $focusSet = $targetWindow->focus();
        if ($focusSet) {
            echo "Focus set successfully.\n";
        } else {
            echo "Failed to set focus.\n";
        }
        
        // Example is_focus: Check again if the window has focus
        echo "Example is_focus: Check again if window has focus: ";
        $hasFocusAfter = $targetWindow->is_focus();
        if ($hasFocusAfter) {
            echo "Window now has focus.\n";
        } else {
            echo "Window still does not have focus.\n";
        }
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>