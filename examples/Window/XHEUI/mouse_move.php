<?php
// Scenario: Demonstrates how to move the mouse to a UI element

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

// Step: Find a specific element to move to (Quick Start button)
$propertyName = "Name";
$propertyValue = "Quick Start";
$quickStartElement = $xheElement->get_by_property($propertyName, $propertyValue);

if ($quickStartElement && $quickStartElement->is_exist()) {
    // Example 1: Move mouse to the Quick Start element
    $result = $quickStartElement->mouse_move();
    
    if ($result) {
        echo("Example 1: Successfully moved mouse to Quick Start element\n");
        echo("Mouse cursor is now positioned over the element\n");
    } else {
        echo("Example 1: Failed to move mouse to Quick Start element\n");
    }
} else {
    echo("Example 1: Quick Start element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>