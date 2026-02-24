<?php
// Scenario: Minimizing a window to the taskbar.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "localhost"
$windowText = "localhost";
$targetWindows = WINDOW::$window->get_all_by_text($windowText, false);
if ($targetWindows->count() > 0) {
    $targetWindow = $targetWindows[0];
    echo "Found window with text: '$windowText'.\n";
    
    // Example minimize: Minimize the window
    echo "Example minimize: Minimize the window: ";
    $isMinimized = $targetWindow->minimize();
    if ($isMinimized) {
        echo "Window minimized successfully.\n";
        sleep(1);
    } else {
        echo "Failed to minimize window.\n";
    }
    
    // step 2: Maximize the window
    echo "Step: Maximize the window: ";
    $isMaximized = $targetWindow->maximize();
    if ($isMaximized) {
        echo "Window maximized successfully.\n";
        sleep(1);
    } else {
        echo "Failed to maximize window.\n";
    }
    
    // step 3: Restore the window to its original size
    echo "Step: Restore the window to its original size: ";
    $isRestored = $targetWindow->restore();
    if ($isRestored) {
        echo "Window restored successfully.\n";
        sleep(1);
    } else {
        echo "Failed to restore window.\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>