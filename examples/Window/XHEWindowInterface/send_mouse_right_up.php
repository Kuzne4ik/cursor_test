<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Show context menu using send_mouse_right_down and send_mouse_right_up

// Step: Get the browser window interface
$windowText = "[localhost";
$browserWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Show context menu using send_mouse_right_down and send_mouse_right_up
echo "Example 1: Show context menu using send_mouse_right_down and send_mouse_right_up\n";

// Step: Define loop parameters
$startX = 0;
$endX = 500;
$increment = 50;

// Step: Loop through coordinates
for ($x = $startX; $x < $endX; $x += $increment) {
    $y = $x; // Use the same value for y coordinate
    
    // Step: Send mouse right down at current coordinates
    $rightDownResult = $browserWindow->send_mouse_right_down($x, $y);
    if ($rightDownResult) {
        echo "Mouse right down sent successfully at coordinates (" . $x . ", " . $y . ")\n";
    } else {
        echo "Failed to send mouse right down at coordinates (" . $x . ", " . $y . ")\n";
    }
    
    // Step: Send mouse right up at current coordinates
    $rightUpResult = $browserWindow->send_mouse_right_up($x, $y);
    if ($rightUpResult) {
        echo "Mouse right up sent successfully at coordinates (" . $x . ", " . $y . ")\n";
        echo "Context menu shown successfully\n";
    } else {
        echo "Failed to send mouse right up at coordinates (" . $x . ", " . $y . ")\n";
    }
    
    sleep(1);
    
    // Step: Hide the context menu by pressing ESC key
    $escKeyCode = 27;
    $keyResult = $keyboard->key($escKeyCode);
    if ($keyResult) {
        echo "Context menu hidden successfully\n";
    } else {
        echo "Failed to hide context menu\n";
    }
}

// Quit the application
WINDOW::$app->quit();
?>