<?php
// Scenario: Getting a window by its screen coordinates from a collection of all windows and retrieving its text.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all available windows
echo "Step 1: Get collection of all windows.\n";
$allWindows = WINDOW::$window->get_all();

// step 2: Define the point coordinates to search for
$pointX = 10;
$pointY = 10;
echo "Step 2: Define target point coordinates: X=$pointX, Y=$pointY\n";

// Example get_by_point: Get the first main visible window at the specified point
echo "Example get_by_point: Get text of first main visible window at point ($pointX, $pointY): ";
$windowByPoint = $allWindows->get_by_point($pointX, $pointY);
if ($windowByPoint->is_exist()) {
    $windowText = $windowByPoint->get_text();
    echo "Window text: '$windowText'\n";
} else {
    echo "No window found at point ($pointX, $pointY).\n";
}

// Quit the application
WINDOW::$app->quit();
?>