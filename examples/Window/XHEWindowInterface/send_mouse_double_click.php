<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Make selections in the editor and double click in the Debug Panel

// Step: Get the browser window interface
$windowText = "[local";
$browserWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Make selections in the editor using send_mouse_double_click
echo "Example 1: Make selections in the editor using send_mouse_double_click\n";

// Step: Define loop parameters
$startY = 100;
$endY = 500;
$increment = 50;
$clickX = 200;

// Step: Loop through y coordinates
for ($y = $startY; $y < $endY; $y += $increment) {
    // Step: Send mouse double click at current coordinates
    $doubleClickResult = $browserWindow->send_mouse_double_click($clickX, $y);
    if ($doubleClickResult) {
        echo "Mouse double click sent successfully at coordinates (" . $clickX . ", " . $y . ")\n";
    } else {
        echo "Failed to send mouse double click at coordinates (" . $clickX . ", " . $y . ")\n";
    }
    
    // Step: Move mouse to current coordinates
    $moveResult = $browserWindow->mouse_move($clickX, $y);
    if ($moveResult) {
        echo "Mouse moved successfully to coordinates (" . $clickX . ", " . $y . ")\n";
    } else {
        echo "Failed to move mouse to coordinates (" . $clickX . ", " . $y . ")\n";
    }
    
    sleep(2);
}

// Example 2: Double click in the Debug Panel
echo "\n\nExample 2: Double click in the Debug Panel\n";

// Step: Get the main window interface
$mainWindowText = "[localhost";
$mainWindow = WINDOW::$window->get_by_text($mainWindowText);

// Step: Define parameters for getting child window by text
$childText = "Панель Отладки";
$visibly = true;
$recursively = true;

// Step: Get the Debug Panel
$debugPane = $mainWindow->get_child_by_text($childText, $visibly, $recursively);

// Step: Define coordinates for double click
$clickX = 100;
$clickY = 100;

// Step: Perform mouse double click operation
$doubleClickResult = $debugPane->send_mouse_double_click($clickX, $clickY);
sleep(5);
if ($doubleClickResult) {
    echo "Double click in Debug Panel executed successfully\n";
} else {
    echo "Failed to execute double click in Debug Panel\n";
}

// Quit the application
WINDOW::$app->quit();
?>