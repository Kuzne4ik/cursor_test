<?php
// Scenario: Getting and changing the text of a window to demonstrate window text manipulation.
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
    
    // step 2: Get the current text of the Notepad window
    echo "Get current window text: ";
    $currentText = $targetNotepadWindow->get_text();
    if ($currentText !== "") {
        echo "Current Notepad window text: '$currentText'\n";
        
        // step 3: Define a new text for the window
        $newText = "Modified Notepad Window";
        echo "New text to set: '$newText'\n";
        
        // Example set_text: Set the text of the Notepad window
        echo "Example set_text: Set window text: ";
        $isTextSet = $targetNotepadWindow->set_text($newText);
        if ($isTextSet) {
            echo "Window text set successfully.\n";
            
            // step 4: Verify the text has been changed
            echo "Verify new window text: ";
            $updatedText = $targetNotepadWindow->get_text();
            if ($updatedText === $newText) {
                echo "Window text has been successfully changed to: '$updatedText'\n";
                
                // step 5: Restore the original text
                echo "Restore original window text: ";
                $isOriginalTextRestored = $targetNotepadWindow->set_text($currentText);
                if ($isOriginalTextRestored) {
                    echo "Original window text restored successfully.\n";
                    
                    // step 6: Verify the original text has been restored
                    echo "Verify restored window text: ";
                    $restoredText = $targetNotepadWindow->get_text();
                    if ($restoredText === $currentText) {
                        echo "Original window text has been successfully restored: '$restoredText'\n";
                    } else {
                        echo "Failed to restore original window text. Current text: '$restoredText'\n";
                    }
                } else {
                    echo "Failed to restore original window text.\n";
                }
            } else {
                echo "Failed to change window text. Current text: '$updatedText'\n";
            }
        } else {
            echo "Failed to set window text.\n";
        }
    } else {
        echo "Failed to get current window text.\n";
    }
} else {
    echo "No Notepad window found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>