<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Show context menu using send_mouse_right_click

// Step: Get the browser window interface
$windowText = "[localhost";
$browserWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Show context menu using send_mouse_right_click
echo "Example 1: Show context menu using send_mouse_right_click\n";

// Step: Define loop parameters
$startX = 100;
$endX = 500;
$increment = 50;

// Step: Loop through coordinates
for ($x = $startX; $x < $endX; $x += $increment) {
    $y = $x; // Use the same value for y coordinate
    
    // Step: Send mouse right click at current coordinates
    $rightClickResult = $browserWindow->send_mouse_right_click($x, $y);
    if ($rightClickResult) {
        echo "Context menu shown successfully at coordinates (" . $x . ", " . $y . ")\n";
    } else {
        echo "Failed to show context menu at coordinates (" . $x . ", " . $y . ")\n";
    }
    
    sleep(2);
    
    // Step: Hide the context menu by pressing ESC key
    $escKeyCode = 27;
    $keyResult = $keyboard->send_key($escKeyCode);
    if ($keyResult) {
        echo "Context menu hidden successfully\n";
    } else {
        echo "Failed to hide context menu\n";
    }
}

// Quit the application
WINDOW::$app->quit();
?>