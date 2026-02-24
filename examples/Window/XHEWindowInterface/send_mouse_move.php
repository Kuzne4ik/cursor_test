<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Select text in the editor using send_mouse_left_down and send_mouse_left_up

// Step: Get the browser window interface
$windowText = "[localhost";
$browserWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Select text in the editor using send_mouse_left_down and send_mouse_left_up
echo "Example 1: Select text in the editor using send_mouse_left_down and send_mouse_left_up\n";

// Step: Define loop parameters
$startX = 200;
$endX = 500;
$increment = 50;

// Step: Loop through coordinates
for ($x = $startX; $x < $endX; $x += $increment) {
    $y = $x; // Use the same value for y coordinate
    
    // Step: Send mouse left down at current coordinates
    $leftDownResult = $browserWindow->send_mouse_left_down($x, $y);
    if ($leftDownResult) {
        echo "Mouse left down sent successfully at coordinates (" . $x . ", " . $y . ")\n";
    } else {
        echo "Failed to send mouse left down at coordinates (" . $x . ", " . $y . ")\n";
    }
    
    // Step: Send mouse left up at coordinates (0, y+50)
    $leftUpX = 0;
    $leftUpY = $y + 50;
    $leftUpResult = $browserWindow->send_mouse_left_up($leftUpX, $leftUpY);
    if ($leftUpResult) {
        echo "Mouse left up sent successfully at coordinates (" . $leftUpX . ", " . $leftUpY . ")\n";
    } else {
        echo "Failed to send mouse left up at coordinates (" . $leftUpX . ", " . $leftUpY . ")\n";
    }
    
    sleep(3);
}

// Step: Send final mouse left up at the last coordinates
$finalX = $endX;
$finalY = $finalX;
$finalLeftUpResult = $browserWindow->send_mouse_left_up($finalX, $finalY);
if ($finalLeftUpResult) {
    echo "Final mouse left up sent successfully at coordinates (" . $finalX . ", " . $finalY . ")\n";
    echo "Text selection completed successfully\n";
} else {
    echo "Failed to send final mouse left up at coordinates (" . $finalX . ", " . $finalY . ")\n";
}

// Quit the application
WINDOW::$app->quit();
?>