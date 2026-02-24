<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Show context menu on the left panel using mouse right down and up

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by text
$childText = "Левая Панель";
$visibly = true;
$recursively = true;

// Example 1: Show context menu on the left panel using mouse right down and up
echo "Example 1: Show context menu on the left panel using mouse right down and up\n";
$leftPane = $mainWindow->get_child_by_text($childText, $visibly, $recursively);
$leftPaneUI = $leftPane->get_ui_element();

// Step: Define coordinates for mouse operations
$clickX = 100;
$clickY = 100;

// Step: Perform mouse right down operation
$rightDownResult = $leftPaneUI->mouse_right_down($clickX, $clickY);
if ($rightDownResult) {
    echo "Mouse right down operation executed successfully\n";
} else {
    echo "Failed to execute mouse right down operation\n";
}

sleep(2);

// Step: Perform mouse right up operation
$rightUpResult = $leftPaneUI->mouse_right_up($clickX, $clickY);
if ($rightUpResult) {
    echo "Mouse right up operation executed successfully\n";
    echo "Context menu shown successfully\n";
} else {
    echo "Failed to execute mouse right up operation\n";
}

sleep(2);

// Step: Hide the menu by pressing ESC key
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