<?php
// Scenario: Getting a collection of windows by title, bringing one to the foreground, and setting focus.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get collection of windows with the title 'Notepad'
$windowText = "Notepad";
echo "Step 1: Get collection of windows with title '$windowText':\n";
$windowInterfaces = WINDOW::$window->get_all_by_text($windowText, false);

// step 2: Get the number of elements in the collection
echo "Step 2: Number of elements in the collection: ";
$windowInterfacesCount = $windowInterfaces->count();
echo $windowInterfacesCount . "\n";

// step 3: Get the first interface from the collection
echo "Step 3: Get the first interface from the collection: ";
if ($windowInterfacesCount == 0) {
    echo "No windows found with text '$windowText'. Quitting.\n";
    // Quit the application
    WINDOW::$app->quit();
} else {
    $notepadWindowInterface = $windowInterfaces[0];
    echo "First interface obtained.\n";

    // Example foreground: Bring the 'Notepad' window to the foreground
    echo "Example foreground: Bring '$windowText' window to the foreground: ";
    $isForegrounded = $notepadWindowInterface->foreground();
    if ($isForegrounded) {
        echo "'$windowText' window brought to foreground successfully.\n";
    } else {
        echo "Failed to bring '$windowText' window to foreground.\n";
    }

    // Example focus: Set focus to the 'Notepad' window
    echo "Example focus: Set focus to '$windowText' window: ";
    $isFocused = $notepadWindowInterface->focus();
    if ($isFocused) {
        echo "'$windowText' window focused successfully.\n";
    } else {
        echo "Failed to focus '$windowText' window.\n";
    }
}

// Quit the application
WINDOW::$app->quit();
?>