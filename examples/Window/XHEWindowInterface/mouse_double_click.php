<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Perform double click in the Debug Panel

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by text
$childText = "Панель отладки";

// Example 1: Perform double click in the Debug Panel
echo "Example 1: Perform double click in the Debug Panel\n";
$debugPane = $mainWindow->get_child_by_text($childText);
$clickX = 100;
$clickY = 100;
$doubleClickResult = $debugPane->mouse_double_click($clickX, $clickY);
if ($doubleClickResult) {
    echo "Double click in Debug Panel executed successfully\n";
} else {
    echo "Failed to execute double click in Debug Panel\n";
}

// Quit the application
WINDOW::$app->quit();
?>