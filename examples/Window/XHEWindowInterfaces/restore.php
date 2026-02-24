<?php
// Scenario: Minimizing, maximizing, and restoring a window to demonstrate window state transitions.
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
    
    // step 2: Minimize the window
    echo "Minimize Notepad window: ";
    $isMinimized = $targetNotepadWindow->minimize();
    if ($isMinimized) {
        echo "Notepad window minimized successfully.\n";
        
        // Wait a moment to see the minimized state
        sleep(1);
        echo "Notepad window is minimized for 1 second.\n";
        
        // step 3: Maximize the window
        echo "Maximize Notepad window: ";
        $isMaximized = $targetNotepadWindow->maximize();
        if ($isMaximized) {
            echo "Notepad window maximized successfully.\n";
            
            // Get maximized window dimensions
            $maximizedWidth = $targetNotepadWindow->get_width();
            $maximizedHeight = $targetNotepadWindow->get_height();
            echo "Maximized Notepad window dimensions: Width=$maximizedWidth, Height=$maximizedHeight\n";
            
            // Wait a moment to see the maximized state
            sleep(1);
            echo "Notepad window is maximized for 1 second.\n";
            
            // Example restore: Restore the window to its previous size
            echo "Example restore: Restore Notepad window: ";
            $isRestored = $targetNotepadWindow->restore();
            if ($isRestored) {
                echo "Notepad window restored successfully.\n";
                
                // Verify restored dimensions
                $restoredWidth = $targetNotepadWindow->get_width();
                $restoredHeight = $targetNotepadWindow->get_height();
                echo "Restored Notepad window dimensions: Width=$restoredWidth, Height=$restoredHeight\n";
                
                // Check if dimensions match the initial dimensions
                if ($restoredWidth == $initialWidth && $restoredHeight == $initialHeight) {
                    echo "Restored dimensions match the initial dimensions.\n";
                } else {
                    echo "Restored dimensions do not match the initial dimensions.\n";
                }
            } else {
                echo "Failed to restore Notepad window.\n";
            }
        } else {
            echo "Failed to maximize Notepad window.\n";
        }
    } else {
        echo "Failed to minimize Notepad window.\n";
    }
} else {
    echo "No Notepad window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>