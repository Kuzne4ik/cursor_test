<?php
// Scenario: Getting the width and dimensions of a window (window with text "Human").
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get window by text
$windowText = "Human";
$targetWindows = WINDOW::$window->get_all_by_text($windowText, false);
if ($targetWindows->count() > 0) {
    $targetWindow = $targetWindows[0];
    echo "Found window with text: '$windowText'.\n\n";
    
    // step 2: Get X coordinate of the window
    $xCoord = $targetWindow->get_x();
    echo "X position: $xCoord\n";
    
    // step 3: Get Y coordinate of the window
    $yCoord = $targetWindow->get_y();
    echo "Y position: $yCoord\n";
    
    // Example get_width: Get the width of the window
    echo "Example get_width: Get width of window: ";
    $width = $targetWindow->get_width();
    echo "Width: $width\n";
    
    // Example get_height: Get the height of the window
    echo "Example get_height: Get height of window: ";
    $height = $targetWindow->get_height();
    echo "Height: $height\n";
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>