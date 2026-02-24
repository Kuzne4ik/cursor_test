<?php
// Scenario: Moving the mouse to specific coordinates within the inspector window.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "Inspector"
$windowText = "Inspector";
$inspectorWindows = WINDOW::$window->get_all_by_text($windowText);
if ($inspectorWindows->count() > 0) {
    $targetInspectorWindow = $inspectorWindows[0];
    echo "Found Inspector window.\n";
    
    // Get window coordinates
    $windowX = $targetInspectorWindow->get_x();
    $windowY = $targetInspectorWindow->get_y();
    $windowWidth = $targetInspectorWindow->get_width();
    $windowHeight = $targetInspectorWindow->get_height();
    echo "Inspector window coordinates: X=$windowX, Y=$windowY, Width=$windowWidth, Height=$windowHeight\n";
    
    // step 2: Calculate coordinates for the center of the window
    $centerX = $windowX + ($windowWidth / 2);
    $centerY = $windowY + ($windowHeight / 2);
    echo "Calculated center coordinates: X=$centerX, Y=$centerY\n";
    
    // Example mouse_move: Move mouse to the center of the inspector window
    echo "Example mouse_move: Move mouse to center: ";
    $isMoved = SYSTEM::$mouse->move($centerX, $centerY);
    if ($isMoved) {
        echo "Mouse moved to center of inspector window successfully.\n";
        
        // step 3: Calculate coordinates for the top-left corner of the window
        $topLeftX = $windowX + 10;
        $topLeftY = $windowY + 10;
        echo "Calculated top-left coordinates: X=$topLeftX, Y=$topLeftY\n";
        
        // Example mouse_move: Move mouse to the top-left corner of the inspector window
        echo "Example mouse_move: Move mouse to top-left corner: ";
        $isMovedToCorner = SYSTEM::$mouse->move($topLeftX, $topLeftY);
        if ($isMovedToCorner) {
            echo "Mouse moved to top-left corner of inspector window successfully.\n";
            
            // step 4: Calculate coordinates for the bottom-right corner of the window
            $bottomRightX = $windowX + $windowWidth - 10;
            $bottomRightY = $windowY + $windowHeight - 10;
            echo "Calculated bottom-right coordinates: X=$bottomRightX, Y=$bottomRightY\n";
            
            // Example mouse_move: Move mouse to the bottom-right corner of the inspector window
            echo "Example mouse_move: Move mouse to bottom-right corner: ";
            $isMovedToBottomRight = SYSTEM::$mouse->move($bottomRightX, $bottomRightY);
            if ($isMovedToBottomRight) {
                echo "Mouse moved to bottom-right corner of inspector window successfully.\n";
            } else {
                echo "Failed to move mouse to bottom-right corner of inspector window.\n";
            }
        } else {
            echo "Failed to move mouse to top-left corner of inspector window.\n";
        }
    } else {
        echo "Failed to move mouse to center of inspector window.\n";
    }
} else {
    echo "No Inspector window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>