<?php
// Scenario: Hiding and showing a window to demonstrate window visibility control.
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
    
    // step 2: Check if the window is currently visible
    echo "Check if Notepad window is visible: ";
    $isVisible = $targetNotepadWindow->is_visible();
    if ($isVisible) {
        echo "Notepad window is currently visible.\n";
        
        // Example show: Hide the Notepad window
        echo "Example show: Hide Notepad window: ";
        $isHidden = $targetNotepadWindow->show(false);
        if ($isHidden) {
            echo "Notepad window hidden successfully.\n";
            
            // Wait a moment to see the hidden state
            sleep(1);
            echo "Notepad window is hidden for 1 second.\n";
            
            // step 3: Verify the window is hidden
            echo "Verify Notepad window is hidden: ";
            $isStillVisible = $targetNotepadWindow->is_visible();
            if (!$isStillVisible) {
                echo "Notepad window is confirmed to be hidden.\n";
                
                // Example show: Show the Notepad window again
                echo "Example show: Show Notepad window: ";
                $isShown = $targetNotepadWindow->show(true);
                if ($isShown) {
                    echo "Notepad window shown successfully.\n";
                    
                    // step 4: Verify the window is visible again
                    echo "Verify Notepad window is visible: ";
                    $isVisibleAgain = $targetNotepadWindow->is_visible();
                    if ($isVisibleAgain) {
                        echo "Notepad window is confirmed to be visible again.\n";
                    } else {
                        echo "Failed to verify Notepad window is visible.\n";
                    }
                } else {
                    echo "Failed to show Notepad window.\n";
                }
            } else {
                echo "Failed to hide Notepad window, it is still visible.\n";
            }
        } else {
            echo "Failed to hide Notepad window.\n";
        }
    } else {
        echo "Notepad window is not currently visible.\n";
        
        // Show the window if it's not visible
        echo "Show Notepad window: ";
        $isShown = $targetNotepadWindow->show(true);
        if ($isShown) {
            echo "Notepad window shown successfully.\n";
            
            // Verify the window is visible
            echo "Verify Notepad window is visible: ";
            $isVisibleNow = $targetNotepadWindow->is_visible();
            if ($isVisibleNow) {
                echo "Notepad window is confirmed to be visible.\n";
            } else {
                echo "Failed to verify Notepad window is visible.\n";
            }
        } else {
            echo "Failed to show Notepad window.\n";
        }
    }
} else {
    echo "No Notepad window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>