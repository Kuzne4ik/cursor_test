<?php
// Scenario: Getting the desktop position (x, y, width, height) of a window.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get the main window with the text "Human"
$windowText = "Human";
echo "Step 1: Get main window with text: $windowText\n";
$targetWindowInterfaces = WINDOW::$window->get_all_by_text($windowText, false); // false for including non-visible
if ($targetWindowInterfaces->count() > 0) {
    $targetWindow = $targetWindowInterfaces[0];
    echo "Target window found.\n";

    // Example get_x: Get the X coordinate of the window
    echo "Example get_x: Get X coordinate of '$windowText' window: ";
    $winX = $targetWindow->get_x();
    echo "X=$winX\n";

    // Example get_y: Get the Y coordinate of the window
    echo "Example get_y: Get Y coordinate of '$windowText' window: ";
    $winY = $targetWindow->get_y();
    echo "Y=$winY\n";

    // Example get_width: Get the width of the window
    echo "Example get_width: Get width of '$windowText' window: ";
    $winWidth = $targetWindow->get_width();
    echo "Width=$winWidth\n";

    // Example get_height: Get the height of the window
    echo "Example get_height: Get height of '$windowText' window: ";
    $winHeight = $targetWindow->get_height();
    echo "Height=$winHeight\n";
} else {
    echo "Window with text '$windowText' not found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>