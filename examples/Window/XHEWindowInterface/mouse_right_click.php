<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Show context menu on the left panel

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by text
$childText = "Левая Панель";
$visibly = true;
$recursively = true;

// Example 1: Show context menu on the left panel
echo "Example 1: Show context menu on the left panel\n";
$leftPane = $mainWindow->get_child_by_text($childText, $visibly, $recursively);
$leftPaneUI = $leftPane->get_ui_element();

// Step: Define coordinates for right click
$clickX = 100;
$clickY = 100;

// Step: Perform mouse right click operation
$rightClickResult = $leftPaneUI->mouse_right_click($clickX, $clickY);
if ($rightClickResult) {
    echo "Context menu shown successfully\n";
} else {
    echo "Failed to show context menu\n";
}

// Step: Hide the menu by pressing ESC key
sleep(2);
$escKeyCode = 27;
$keyResult = $keyboard->key($escKeyCode);
if ($keyResult) {
    echo "Context menu hidden successfully\n";
} else {
    echo "Failed to hide context menu\n";
}

// Quit the application
WINDOW::$app->quit();
?>