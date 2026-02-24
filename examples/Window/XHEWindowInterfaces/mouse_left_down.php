<?php
// Scenario: Resizing the inspector panel by simulating mouse left button down, move, and up operations.
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
    
    // step 2: Calculate coordinates for the right edge of the window (for resizing)
    $resizeX = $windowX + $windowWidth - 5; // Near the right edge
    $resizeY = $windowY + ($windowHeight / 2); // Middle of the window
    echo "Calculated resize coordinates: X=$resizeX, Y=$resizeY\n";
    
    // step 3: Move mouse to the resize position
    echo "Move mouse to resize position: ";
    $isMoved = SYSTEM::$mouse->move($resizeX, $resizeY);
    if ($isMoved) {
        echo "Mouse moved to resize position successfully.\n";
        
        // Example mouse_left_down: Press the left mouse button at the resize position
        echo "Example mouse_left_down: Press left mouse button: ";
        $isLeftDown = $targetInspectorWindow->mouse_left_down($resizeX, $resizeY);
        if ($isLeftDown) {
            echo "Left mouse button pressed successfully.\n";
            
            // step 4: Move mouse to resize the window (make it wider)
            $newResizeX = $resizeX + 100; // Increase width by 100 pixels
            echo "Move mouse to resize window: ";
            $isResized = SYSTEM::$mouse->move($newResizeX, $resizeY);
            if ($isResized) {
                echo "Mouse moved to resize window successfully.\n";
                
                // Example mouse_left_up: Release the left mouse button to complete resizing
                echo "Example mouse_left_up: Release left mouse button: ";
                $isLeftUp = $targetInspectorWindow->mouse_left_up($newResizeX, $resizeY);
                if ($isLeftUp) {
                    echo "Left mouse button released successfully.\n";
                    
                    // Verify the window has been resized
                    $newWindowWidth = $targetInspectorWindow->get_width();
                    echo "New window width: $newWindowWidth\n";
                } else {
                    echo "Failed to release left mouse button.\n";
                }
            } else {
                echo "Failed to move mouse to resize window.\n";
            }
        } else {
            echo "Failed to press left mouse button.\n";
        }
    } else {
        echo "Failed to move mouse to resize position.\n";
    }
} else {
    echo "No Inspector window found to resize.\n";
}

// Quit the application
WINDOW::$app->quit();
?>