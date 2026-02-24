<?php
// Scenario: Demonstrates how to dock a UI element to the left side of the screen

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction
$windowText = "localhost";
$xheElement = WINDOW::$window->get_by_text($windowText)->get_ui_element();

// Example 1: Dock the UI element to the left side
$dockPosition = "left";
$result = $xheElement->dock($dockPosition);

if ($result) {
    echo("Example 1: Successfully docked element to the left side\n");
} else {
    echo("Example 1: Failed to dock element to the left side\n");
}

// Quit the application
WINDOW::$app->quit();
?>