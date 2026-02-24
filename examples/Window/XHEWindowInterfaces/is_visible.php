<?php
// Scenario: Checking if a window is visible and hiding/showing an application from/to the system tray.
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
    
    // Example is_visible: Check if the window is visible
    echo "Example is_visible: Check if window is visible: ";
    $isVisible = $targetWindow->is_visible();
    if ($isVisible) {
        echo "Window is visible.\n";
    } else {
        echo "Window is not visible.\n";
    }
    
    // step 2: Minimize the application to the system tray
    echo "Step: Minimize the application to the system tray: ";
    $isMinimizedToTray = WINDOW::$app->minimize_to_tray();
    if ($isMinimizedToTray) {
        echo "Application minimized to tray successfully.\n";
    } else {
        echo "Failed to minimize application to tray.\n";
    }
    
    // Example is_visible: Check again if the window is visible
    echo "Example is_visible: Check again if window is visible: ";
    $isVisibleAfter = $targetWindow->is_visible();
    if ($isVisibleAfter) {
        echo "Window is still visible.\n";
    } else {
        echo "Window is now hidden (minimized to tray).\n";
    }
    
    // step 3: Show the application from the system tray
    echo "Step: Show the application from the system tray: ";
    $isShownFromTray = WINDOW::$app->show_from_tray();
    if ($isShownFromTray) {
        echo "Application shown from tray successfully.\n";
    } else {
        echo "Failed to show application from tray.\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>