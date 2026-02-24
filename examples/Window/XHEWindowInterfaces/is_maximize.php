<?php
// Scenario: Checking if a window is maximized and maximizing a window.
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
    
    // step 2: Restore the window to ensure it's not maximized initially
    echo "Step: Restore the window to ensure it's not maximized initially: ";
    $isRestored = $targetWindow->restore();
    if ($isRestored) {
        echo "Window restored successfully.\n";
    } else {
        echo "Failed to restore window.\n";
    }
    
    // Example is_maximize: Check if the window is maximized
    echo "Example is_maximize: Check if window is maximized: ";
    $isMaximized = $targetWindow->is_maximize();
    if ($isMaximized) {
        echo "Window is maximized.\n";
    } else {
        echo "Window is not maximized.\n";
    }
    
    // step 3: Maximize the window
    echo "Step: Maximize the window: ";
    $isMaximizeSuccess = $targetWindow->maximize();
    if ($isMaximizeSuccess) {
        echo "Window maximized successfully.\n";
    } else {
        echo "Failed to maximize window.\n";
    }
    
    // Example is_maximize: Check again if the window is maximized
    echo "Example is_maximize: Check again if window is maximized: ";
    $isMaximizedAfter = $targetWindow->is_maximize();
    if ($isMaximizedAfter) {
        echo "Window is now maximized.\n";
    } else {
        echo "Window is not maximized.\n";
    }
    
    // step 4: Restore the window again
    echo "Step: Restore the window again: ";
    $isRestoredAgain = $targetWindow->restore();
    if ($isRestoredAgain) {
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