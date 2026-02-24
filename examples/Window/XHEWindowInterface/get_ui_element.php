<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get UI element information of a window
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Get UI element information of the XHE window
echo "Example 1: Get UI element information of the XHE window\n";
$uiElement = $mainWindow->get_ui_element();
$uiElementInfo = $uiElement->get_info();
$clickablePoint = $uiElement->get_clickable_point();

echo "UI Element Information:\n";
print_r($uiElementInfo);
echo "\nClickable Point:\n";
print_r($clickablePoint);

// Quit the application
WINDOW::$app->quit();
?>