<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Check if a window is maximized, maximize it, and restore it
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Check if the application is maximized after restoring it
echo "Example 1: Check if the application is maximized after restoring it\n";
$restoreResult1 = $mainWindow->restore();
$isMaximizeResult1 = $mainWindow->is_maximize();
if (!$isMaximizeResult1) {
    echo "Application is not maximized\n";
} else {
    echo "Application is maximized\n";
}

// Example 2: Maximize the application
echo "Example 2: Maximize the application\n";
$maximizeResult = $mainWindow->maximize();
if ($maximizeResult) {
    echo "Application maximized successfully\n";
} else {
    echo "Failed to maximize application\n";
}

// Example 3: Check if the application is maximized after maximizing it
echo "Example 3: Check if the application is maximized after maximizing it\n";
$isMaximizeResult2 = $mainWindow->is_maximize();
if ($isMaximizeResult2) {
    echo "Application is maximized\n";
} else {
    echo "Application is not maximized\n";
}

// Example 4: Restore the application
echo "Example 4: Restore the application\n";
$restoreResult2 = $mainWindow->restore();
if ($restoreResult2) {
    echo "Application restored successfully\n";
} else {
    echo "Failed to restore application\n";
}

// Quit the application
WINDOW::$app->quit();
?>