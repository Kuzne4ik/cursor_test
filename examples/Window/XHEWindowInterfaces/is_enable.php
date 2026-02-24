<?php
// Scenario: Checking if a window is enabled (can receive user input).
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
    
    // Example is_enable: Check if the window is enabled
    echo "Example is_enable: Check if window is enabled: ";
    $isEnabled = $targetWindow->is_enable();
    if ($isEnabled) {
        echo "Window is enabled (can receive user input).\n";
    } else {
        echo "Window is disabled (cannot receive user input).\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>