<?php
// Scenario: Getting the X coordinate and dimensions of a window (window with text "Human").
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
    
    // Example get_x: Get the X coordinate of the window
    echo "Example get_x: Get X coordinate of window: ";
    $xCoord = $targetWindow->get_x();
    echo "X position: $xCoord\n";
    
    // step 2: Get Y coordinate of the window
    $yCoord = $targetWindow->get_y();
    echo "Y position: $yCoord\n";
    
    // step 3: Get width of the window
    $width = $targetWindow->get_width();
    echo "Width: $width\n";
    
    // step 4: Get height of the window
    $height = $targetWindow->get_height();
    echo "Height: $height\n";
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>