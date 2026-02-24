<?php
// Scenario: Calling a context menu on the left panel by simulating a right mouse click.
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
    
    // step 2: Calculate coordinates for the left panel of the window
    $leftPanelX = $windowX + 50; // 50 pixels from the left edge
    $leftPanelY = $windowY + ($windowHeight / 2); // Middle of the window
    echo "Calculated left panel coordinates: X=$leftPanelX, Y=$leftPanelY\n";
    
    // step 3: Move mouse to the left panel
    echo "Move mouse to left panel: ";
    $isMoved = SYSTEM::$mouse->move($leftPanelX, $leftPanelY);
    if ($isMoved) {
        echo "Mouse moved to left panel successfully.\n";
        
        // Example mouse_right_click: Perform a right click on the left panel to show context menu
        echo "Example mouse_right_click: Right click on left panel: ";
        $isRightClicked = $targetInspectorWindow->mouse_right_click($leftPanelX, $leftPanelY);
        if ($isRightClicked) {
            echo "Right click performed successfully, context menu should appear.\n";
            
            // step 4: Wait a moment to see the context menu
            sleep(1);
            echo "Context menu displayed for 1 second.\n";
            
            // step 5: Hide the context menu by pressing ESC key
            echo "Hide context menu by pressing ESC: ";
            $isEscPressed = SYSTEM::$keyboard->key(27); // 27 is the virtual key code for ESC
            if ($isEscPressed) {
                echo "ESC key pressed successfully, context menu should be hidden.\n";
            } else {
                echo "Failed to press ESC key.\n";
            }
        } else {
            echo "Failed to perform right click.\n";
        }
    } else {
        echo "Failed to move mouse to left panel.\n";
    }
} else {
    echo "No Inspector window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>