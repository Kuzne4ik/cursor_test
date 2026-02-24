<?php
// Scenario: Performing a double mouse click on a window element (e.g., clicking a debug panel).
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
    
    // step 2: Get the debug panel child window by its text
    $debugPanelText = "Панель отладки";
    $debugPanel = $targetWindow->get_child_by_text($debugPanelText);
    if ($debugPanel->is_exist()) {
        echo "Found debug panel with text: '$debugPanelText'.\n";
        
        // Define coordinates for the double click
        $clickX = 100;
        $clickY = 100;
        echo "Double click coordinates: X=$clickX, Y=$clickY\n";
        
        // Example mouse_double_click: Double click on the debug panel
        echo "Example mouse_double_click: Double click on debug panel: ";
        $doubleClickSuccess = $debugPanel->mouse_double_click($clickX, $clickY);
        if ($doubleClickSuccess) {
            echo "Double click performed successfully.\n";
        } else {
            echo "Failed to perform double click.\n";
        }
    } else {
        echo "Debug panel with text: '$debugPanelText' not found.\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>