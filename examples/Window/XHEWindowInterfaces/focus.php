<?php
// Scenario: Bringing a Notepad window to the foreground and then setting focus to it.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "Notepad"
$windowText = "Notepad";
$notepadWindows = WINDOW::$window->get_all_by_text($windowText, false);
if ($notepadWindows->count() > 0) {
    $targetNotepadWindow = $notepadWindows[0];
    echo "Found Notepad window.\n";

    // step 2: Bring the Notepad window to the foreground
    echo "Step 2: Bring Notepad window to foreground: ";
    $isForegrounded = $targetNotepadWindow->foreground();
    if ($isForegrounded) {
        echo "Notepad window brought to foreground.\n";
    } else {
        echo "Failed to bring Notepad window to foreground.\n";
    }

    // Example focus: Set focus to the Notepad window
    echo "Example focus: Set focus to Notepad window: ";
    $isFocused = $targetNotepadWindow->focus();
    if ($isFocused) {
        echo "Notepad window focused successfully.\n";
    } else {
        echo "Failed to focus Notepad window.\n";
    }
} else {
    echo "No Notepad window found to focus.\n";
}

sleep(2);

// Quit the application
WINDOW::$app->quit();
?>