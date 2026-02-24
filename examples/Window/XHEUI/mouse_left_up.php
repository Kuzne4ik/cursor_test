<?php
// Scenario: Demonstrates how to perform mouse left button up action on a UI element

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

// Step: Find a specific element to click (Quick Start button)
$propertyName = "Name";
$propertyValue = "Quick Start";
$quickStartElement = $xheElement->get_by_property($propertyName, $propertyValue);

if ($quickStartElement && $quickStartElement->is_exist()) {
    // Example 1: Press left mouse button down first
    $offsetX = 2;
    $offsetY = 2;
    $result1 = $quickStartElement->mouse_left_down($offsetX, $offsetY);
    
    if ($result1) {
        echo("Example 1: Successfully pressed left mouse button down at offset ($offsetX, $offsetY)\n");
    } else {
        echo("Example 1: Failed to press left mouse button down\n");
    }
    
    // Step: Wait a moment
    sleep(1);
    
    // Example 2: Release left mouse button up
    $result2 = $quickStartElement->mouse_left_up($offsetX, $offsetY);
    
    if ($result2) {
        echo("Example 2: Successfully released left mouse button up at offset ($offsetX, $offsetY)\n");
    } else {
        echo("Example 2: Failed to release left mouse button up\n");
    }
} else {
    echo("Example 1: Quick Start element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>