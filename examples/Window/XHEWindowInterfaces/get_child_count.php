<?php
// Scenario: Getting the number of child windows for a main application window.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get the main window with the text "localhost"
$windowText = "localhost";
echo "Step 1: Get main window with text: $windowText\n";
$mainWindowInterfaces = WINDOW::$window->get_all_by_text($windowText);
if ($mainWindowInterfaces->count() > 0) {
    $mainWindow = $mainWindowInterfaces[0];
    echo "Main window found.\n";

    // Example get_child_count: Get the number of child windows
    echo "Example get_child_count: Get number of child windows for '$windowText': ";
    $childCount = $mainWindow->get_child_count();
    if ($childCount > -1) { // Assuming -1 or similar for error, else count
        echo "The window has $childCount child windows.\n";
    } else {
        echo "Failed to get child window count.\n";
    }
} else {
    echo "Main window with text '$windowText' not found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>