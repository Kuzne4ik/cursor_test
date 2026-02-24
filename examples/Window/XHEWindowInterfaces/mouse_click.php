<?php
// Scenario: Performing a mouse click on a window element (e.g., clicking a close button).
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
    
    // step 2: Get the inspector child window by its text
    $inspectorText = "Инспектор";
    $inspectorWindow = $targetWindow->get_child_by_text($inspectorText);
    if ($inspectorWindow->is_exist()) {
        echo "Found inspector window with text: '$inspectorText'.\n";
        
        // step 3: Get the width of the inspector window
        $inspectorWidth = $inspectorWindow->get_width();
        echo "Inspector window width: $inspectorWidth\n";
        
        // Calculate click coordinates (near the top-right corner, likely a close button)
        $clickX = $inspectorWidth - 28;
        $clickY = 8;
        echo "Calculated click coordinates: X=$clickX, Y=$clickY\n";
        
        // Example mouse_click: Click on the inspector window's close button
        echo "Example mouse_click: Click on inspector window's close button: ";
        $clickSuccess = $inspectorWindow->mouse_click($clickX, $clickY);
        if ($clickSuccess) {
            echo "Mouse click performed successfully.\n";
        } else {
            echo "Failed to perform mouse click.\n";
        }
    } else {
        echo "Inspector window with text: '$inspectorText' not found.\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>