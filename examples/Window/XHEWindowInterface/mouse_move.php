<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Move mouse to inspector coordinates

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by text
$childText = "Инспектор";
$visibly = true;
$recursively = true;

// Example 1: Move mouse to inspector coordinates +100 +100
echo "Example 1: Move mouse to inspector coordinates +100 +100\n";
$inspector = $mainWindow->get_child_by_text($childText, $visibly, $recursively);
$inspectorUI = $inspector->get_ui_element();

// Step: Define coordinates for mouse movement
$moveX = 100;
$moveY = 100;

// Step: Perform mouse move operation
$moveResult = $inspectorUI->mouse_move($moveX, $moveY);
if ($moveResult) {
    echo "Mouse moved to inspector coordinates successfully\n";
} else {
    echo "Failed to move mouse to inspector coordinates\n";
}

// Quit the application
WINDOW::$app->quit();
?>