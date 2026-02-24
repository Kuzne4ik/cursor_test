<?php
// Scenario: Closing a Notepad window using its title text.
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

    // Example close: Close the first Notepad window found
    echo "Example close: Close Notepad window: ";
    $isClosed = $targetNotepadWindow->close();
    if ($isClosed) {
        echo "Notepad window closed successfully.\n";
    } else {
        echo "Failed to close Notepad window.\n";
    }
} else {
    echo "No Notepad window found to close.\n";
}

// Quit the application
WINDOW::$app->quit();
?>