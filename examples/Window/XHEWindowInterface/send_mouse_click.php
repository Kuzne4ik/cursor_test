<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Move cursor in the editor using send_mouse_click

// Step: Get the browser window interface
$windowText = "[localhost";
$browserWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Move cursor in the editor using send_mouse_click and mouse_move
echo "Example 1: Move cursor in the editor using send_mouse_click and mouse_move\n";

// Step: Define loop parameters
$startX = 200;
$endX = 500;
$increment = 10;

// Step: Loop through coordinates
for ($x = $startX; $x < $endX; $x += $increment) {
    $y = $x; // Use the same value for y coordinate
    
    // Step: Send mouse click at current coordinates
    $clickResult = $browserWindow->send_mouse_click($x, $y);
    if ($clickResult) {
        echo "Mouse click sent successfully at coordinates (" . $x . ", " . $y . ")\n";
    } else {
        echo "Failed to send mouse click at coordinates (" . $x . ", " . $y . ")\n";
    }
    
    // Step: Move mouse to current coordinates
    $moveResult = $browserWindow->mouse_move($x, $y);
    if ($moveResult) {
        echo "Mouse moved successfully to coordinates (" . $x . ", " . $y . ")\n";
    } else {
        echo "Failed to move mouse to coordinates (" . $x . ", " . $y . ")\n";
    }
    
    sleep(3);
}

// Quit the application
WINDOW::$app->quit();
?>