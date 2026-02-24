<?php
// Scenario: Calling a context menu on the debug panel by simulating mouse right button down and up operations.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "Debug"
$windowText = "Debug";
$debugWindows = WINDOW::$window->get_all_by_text($windowText);
if ($debugWindows->count() > 0) {
    $targetDebugWindow = $debugWindows[0];
    echo "Found Debug window.\n";
    
    // Get window coordinates
    $windowX = $targetDebugWindow->get_x();
    $windowY = $targetDebugWindow->get_y();
    $windowWidth = $targetDebugWindow->get_width();
    $windowHeight = $targetDebugWindow->get_height();
    echo "Debug window coordinates: X=$windowX, Y=$windowY, Width=$windowWidth, Height=$windowHeight\n";
    
    // step 2: Calculate coordinates for the debug panel of the window
    $debugPanelX = $windowX + ($windowWidth / 2); // Middle of the window horizontally
    $debugPanelY = $windowY + ($windowHeight / 2); // Middle of the window vertically
    echo "Calculated debug panel coordinates: X=$debugPanelX, Y=$debugPanelY\n";
    
    // step 3: Move mouse to the debug panel
    echo "Move mouse to debug panel: ";
    $isMoved = SYSTEM::$mouse->move($debugPanelX, $debugPanelY);
    if ($isMoved) {
        echo "Mouse moved to debug panel successfully.\n";
        
        // step 4: Press the right mouse button at the debug panel
        echo "Press right mouse button: ";
        $isRightDown = $targetDebugWindow->mouse_right_down($debugPanelX, $debugPanelY);
        if ($isRightDown) {
            echo "Right mouse button pressed successfully.\n";
            
            // step 5: Wait a moment
            sleep(1);
            echo "Right mouse button held for 1 second.\n";
            
            // Example mouse_right_up: Release the right mouse button to show context menu
            echo "Example mouse_right_up: Release right mouse button: ";
            $isRightUp = $targetDebugWindow->mouse_right_up($debugPanelX, $debugPanelY);
            if ($isRightUp) {
                echo "Right mouse button released successfully, context menu should appear.\n";
                
                // step 6: Wait a moment to see the context menu
                sleep(1);
                echo "Context menu displayed for 1 second.\n";
                
                // step 7: Hide the context menu by pressing ESC key
                echo "Hide context menu by pressing ESC: ";
                $isEscPressed = SYSTEM::$keyboard->key(27); // 27 is the virtual key code for ESC
                if ($isEscPressed) {
                    echo "ESC key pressed successfully, context menu should be hidden.\n";
                } else {
                    echo "Failed to press ESC key.\n";
                }
            } else {
                echo "Failed to release right mouse button.\n";
            }
        } else {
            echo "Failed to press right mouse button.\n";
        }
    } else {
        echo "Failed to move mouse to debug panel.\n";
    }
} else {
    echo "No Debug window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>