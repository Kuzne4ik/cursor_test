<?php
// Scenario: Demonstrates how to send a mouse click event to a UI element

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
    // Example 1: Send mouse click event with offset
    $offsetX = 2;
    $offsetY = 2;
    $result = $quickStartElement->send_mouse_click($offsetX, $offsetY);
    
    if ($result) {
        echo("Example 1: Successfully sent mouse click event at offset ($offsetX, $offsetY)\n");
    } else {
        echo("Example 1: Failed to send mouse click event\n");
    }
} else {
    echo("Example 1: Quick Start element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>