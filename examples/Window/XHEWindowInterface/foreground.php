<?php
// Scenario: Bring window to foreground and set focus
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get collection of windows with title 'Notepad'
$windowText = "Notepad";
$windowInterfaces = WINDOW::$window->get_all_by_text($windowText, false);

// Step: Count elements in collection
$windowInterfacesCount = $windowInterfaces->count();
echo "Step: Found " . $windowInterfacesCount . " windows with text '" . $windowText . "'\n";

// Step: Get first interface from collection
if ($windowInterfacesCount == 0) {
    echo "No windows found with text '" . $windowText . "'. Exiting.\n";
    // Quit the application
    WINDOW::$app->quit();
    exit;
} else {
    $notepadWindowInterface = $windowInterfaces[0];
    
    // Example 1: Bring Notepad window to foreground
    echo "Example 1: Bring Notepad window to foreground\n";
    $foregroundResult = $notepadWindowInterface->foreground();
    if ($foregroundResult) {
        echo "Notepad window brought to foreground successfully\n";
    } else {
        echo "Failed to bring Notepad window to foreground\n";
    }

    // Example 2: Set focus to Notepad window
    echo "Example 2: Set focus to Notepad window\n";
    $focusResult = $notepadWindowInterface->focus();
    if ($focusResult) {
        echo "Notepad window focused successfully\n";
    } else {
        echo "Failed to focus Notepad window\n";
    }
}

// Quit the application
WINDOW::$app->quit();
?>