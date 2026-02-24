<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Minimize, maximize, and restore an application window
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$visibly = false;
$mainWindow = WINDOW::$window->get_by_text($windowText, $visibly);

// Example 1: Minimize the application
echo "Example 1: Minimize the application\n";
$minimizeResult = $mainWindow->minimize();
if ($minimizeResult) {
    echo "Application minimized successfully\n";
} else {
    echo "Failed to minimize application\n";
}
sleep(1);

// Example 2: Maximize the application
echo "Example 2: Maximize the application\n";
$maximizeResult = $mainWindow->maximize();
if ($maximizeResult) {
    echo "Application maximized successfully\n";
} else {
    echo "Failed to maximize application\n";
}
sleep(1);

// Example 3: Restore the application
echo "Example 3: Restore the application\n";
$restoreResult = $mainWindow->restore();
if ($restoreResult) {
    echo "Application restored successfully\n";
} else {
    echo "Failed to restore application\n";
}
sleep(1);

// Quit the application
WINDOW::$app->quit();
?>