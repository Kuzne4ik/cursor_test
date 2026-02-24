<?php
// Scenario: Getting the HWND (Window Handle) of an application window.
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

    // Example get_hwnd: Get the HWND of the application window
    echo "Example get_hwnd: Get HWND of window with text '$windowText': ";
    $hwnd = $mainWindow->get_hwnd();
    if ($hwnd !== 0) { // Assuming 0 or null for error
        echo "HWND: $hwnd\n";
    } else {
        echo "Failed to get HWND for '$windowText'.\n";
    }
} else {
    echo "Main window with text '$windowText' not found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>