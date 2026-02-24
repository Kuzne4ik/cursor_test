<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Hide the inspector element using mouse click

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by text
$childText = "Инспектор";
$visibly = true;
$recursively = true;

// Example 1: Hide the inspector element using mouse click
echo "Example 1: Hide the inspector element using mouse click\n";
$inspector = $mainWindow->get_child_by_text($childText, $visibly, $recursively);
$inspectorUI = $inspector->get_ui_element();
$clickX = 0;
$clickY = 0;
$clickResult = $inspectorUI->mouse_click($clickX, $clickY);
if ($clickResult) {
    echo "Inspector element hidden successfully\n";
} else {
    echo "Failed to hide inspector element\n";
}

// Quit the application
WINDOW::$app->quit();
?>