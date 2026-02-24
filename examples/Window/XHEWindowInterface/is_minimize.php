<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Check if a window is minimized, minimize it, and restore it
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Check if the application is minimized
echo "Example 1: Check if the application is minimized\n";
$isMinimizeResult1 = $mainWindow->is_minimize();
if (!$isMinimizeResult1) {
    echo "Application is not minimized\n";
} else {
    echo "Application is minimized\n";
}

// Example 2: Minimize the application
echo "Example 2: Minimize the application\n";
$minimizeResult = $mainWindow->minimize();
if ($minimizeResult) {
    echo "Application minimized successfully\n";
} else {
    echo "Failed to minimize application\n";
}

// Example 3: Check if the application is minimized after minimizing it
echo "Example 3: Check if the application is minimized after minimizing it\n";
$isMinimizeResult2 = $mainWindow->is_minimize();
if ($isMinimizeResult2) {
    echo "Application is minimized\n";
} else {
    echo "Application is not minimized\n";
}

// Example 4: Restore the application
echo "Example 4: Restore the application\n";
$restoreResult = $mainWindow->restore();
if ($restoreResult) {
    echo "Application restored successfully\n";
} else {
    echo "Failed to restore application\n";
}

// Quit the application
WINDOW::$app->quit();
?>