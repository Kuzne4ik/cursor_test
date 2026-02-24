<?php
// Scenario: Checking if a window is minimized and minimizing a window.
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
    
    // Example is_minimize: Check if the window is minimized
    echo "Example is_minimize: Check if window is minimized: ";
    $isMinimized = $targetWindow->is_minimize();
    if ($isMinimized) {
        echo "Window is minimized.\n";
    } else {
        echo "Window is not minimized.\n";
    }
    
    // step 2: Minimize the window
    echo "Step: Minimize the window: ";
    $isMinimizeSuccess = $targetWindow->minimize();
    if ($isMinimizeSuccess) {
        echo "Window minimized successfully.\n";
    } else {
        echo "Failed to minimize window.\n";
    }
    
    // Example is_minimize: Check again if the window is minimized
    echo "Example is_minimize: Check again if window is minimized: ";
    $isMinimizedAfter = $targetWindow->is_minimize();
    if ($isMinimizedAfter) {
        echo "Window is now minimized.\n";
    } else {
        echo "Window is not minimized.\n";
    }
    
    // step 3: Restore the window
    echo "Step: Restore the window: ";
    $isRestored = $targetWindow->restore();
    if ($isRestored) {
        echo "Window restored successfully.\n";
    } else {
        echo "Failed to restore window.\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>