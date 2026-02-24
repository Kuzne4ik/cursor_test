<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Check if a window is visible, hide it to tray, and show it from tray
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Check if the main visible window containing 'localhost' text is visible
echo "Example 1: Check if the main visible window containing 'localhost' text is visible\n";
$isVisibleResult1 = $mainWindow->is_visible();
if ($isVisibleResult1) {
    echo "Window with text '" . $windowText . "' is visible\n";
} else {
    echo "Window with text '" . $windowText . "' is not visible\n";
}

// Example 2: Hide the application to tray
echo "Example 2: Hide the application to tray\n";
$minimizeToTrayResult = WINDOW::$app->minimize_to_tray();
if ($minimizeToTrayResult) {
    echo "Application minimized to tray successfully\n";
} else {
    echo "Failed to minimize application to tray\n";
}

// Example 3: Check visibility again after hiding to tray
echo "Example 3: Check visibility again after hiding to tray\n";
$isVisibleResult2 = $mainWindow->is_visible();
if (!$isVisibleResult2) {
    echo "Window is now hidden\n";
} else {
    echo "Window is still visible\n";
}

// Example 4: Show the application from tray
echo "Example 4: Show the application from tray\n";
$showFromTrayResult = WINDOW::$app->show_from_tray();
if ($showFromTrayResult) {
    echo "Application shown from tray successfully\n";
} else {
    echo "Failed to show application from tray\n";
}

// Quit the application
WINDOW::$app->quit();
?>