<?php
// Scenario: Resizing, moving, and maximizing a window to demonstrate window manipulation operations.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "Notepad"
$windowText = "Notepad";
$notepadWindows = WINDOW::$window->get_all_by_text($windowText);
if ($notepadWindows->count() > 0) {
    $targetNotepadWindow = $notepadWindows[0];
    echo "Found Notepad window.\n";
    
    // Get initial window coordinates
    $initialX = $targetNotepadWindow->get_x();
    $initialY = $targetNotepadWindow->get_y();
    $initialWidth = $targetNotepadWindow->get_width();
    $initialHeight = $targetNotepadWindow->get_height();
    echo "Initial Notepad window coordinates: X=$initialX, Y=$initialY, Width=$initialWidth, Height=$initialHeight\n";
    
    // Example resize: Resize the window to make it larger
    $newWidth = $initialWidth + 100;
    $newHeight = $initialHeight + 50;
    echo "Example resize: Resize Notepad window: ";
    $isResized = $targetNotepadWindow->resize($newWidth, $newHeight);
    if ($isResized) {
        echo "Notepad window resized successfully to Width=$newWidth, Height=$newHeight\n";
        
        // Verify the new dimensions
        $currentWidth = $targetNotepadWindow->get_width();
        $currentHeight = $targetNotepadWindow->get_height();
        echo "Current Notepad window dimensions: Width=$currentWidth, Height=$currentHeight\n";
        
        // step 2: Move the window to a new position
        $newX = $initialX + 50;
        $newY = $initialY + 50;
        echo "Move Notepad window: ";
        $isMoved = $targetNotepadWindow->move($newX, $newY);
        if ($isMoved) {
            echo "Notepad window moved successfully to X=$newX, Y=$newY\n";
            
            // step 3: Maximize the window
            echo "Maximize Notepad window: ";
            $isMaximized = $targetNotepadWindow->maximize();
            if ($isMaximized) {
                echo "Notepad window maximized successfully.\n";
                
                // Get maximized window dimensions
                $maximizedWidth = $targetNotepadWindow->get_width();
                $maximizedHeight = $targetNotepadWindow->get_height();
                echo "Maximized Notepad window dimensions: Width=$maximizedWidth, Height=$maximizedHeight\n";
                
                // step 4: Restore the window to its previous size
                echo "Restore Notepad window: ";
                $isRestored = $targetNotepadWindow->restore();
                if ($isRestored) {
                    echo "Notepad window restored successfully.\n";
                    
                    // Verify restored dimensions
                    $restoredWidth = $targetNotepadWindow->get_width();
                    $restoredHeight = $targetNotepadWindow->get_height();
                    echo "Restored Notepad window dimensions: Width=$restoredWidth, Height=$restoredHeight\n";
                } else {
                    echo "Failed to restore Notepad window.\n";
                }
            } else {
                echo "Failed to maximize Notepad window.\n";
            }
        } else {
            echo "Failed to move Notepad window.\n";
        }
    } else {
        echo "Failed to resize Notepad window.\n";
    }
} else {
    echo "No Notepad window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>