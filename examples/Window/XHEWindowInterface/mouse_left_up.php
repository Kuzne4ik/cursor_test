<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Resize the inspector panel using mouse operations

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by text
$childText = "Инспектор";
$visibly = true;
$recursively = true;

// Example 1: Resize the inspector panel using mouse operations
echo "Example 1: Resize the inspector panel using mouse operations\n";
$inspector = $mainWindow->get_child_by_text($childText, $visibly, $recursively);
$inspectorUI = $inspector->get_ui_element();

// Step: Define coordinates for mouse operations
$leftDownX = -3;
$leftDownY = 1;
$moveX = -200;
$moveY = 0;
$leftUpX = -203;
$leftUpY = 1;

// Step: Perform mouse left down operation
$leftDownResult = $inspectorUI->mouse_left_down($leftDownX, $leftDownY);
if ($leftDownResult) {
    echo "Mouse left down operation executed successfully\n";
} else {
    echo "Failed to execute mouse left down operation\n";
}

// Step: Perform mouse move operation
$moveResult = $inspectorUI->mouse_move($moveX, $moveY);
if ($moveResult) {
    echo "Mouse move operation executed successfully\n";
} else {
    echo "Failed to execute mouse move operation\n";
}

// Step: Perform mouse left up operation
$leftUpResult = $inspectorUI->mouse_left_up($leftUpX, $leftUpY);
if ($leftUpResult) {
    echo "Mouse left up operation executed successfully\n";
    echo "Inspector panel resized successfully\n";
} else {
    echo "Failed to execute mouse left up operation\n";
}

// Quit the application
WINDOW::$app->quit();
?>