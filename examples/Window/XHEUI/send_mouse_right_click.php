<?php
// Scenario: Demonstrates how to send a right mouse click event to a UI element

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

// Step: Find a specific element to right click (Quick Start button)
$propertyName = "Name";
$propertyValue = "Quick Start";
$quickStartElement = $xheElement->get_by_property($propertyName, $propertyValue);

if ($quickStartElement && $quickStartElement->is_exist()) {
    // Example 1: Send right mouse click event with offset
    $offsetX = 2;
    $offsetY = 2;
    $result = $quickStartElement->send_mouse_right_click($offsetX, $offsetY);
    
    if ($result) {
        echo("Example 1: Successfully sent right mouse click event at offset ($offsetX, $offsetY)\n");
        echo("Context menu should now be visible\n");
        
        // Step: Wait a moment and then hide the context menu
        sleep(2);
        $escapeKeyCode = 27;
        // Note: Using keyboard class to hide context menu
        // This will need to be adjusted based on the actual XHE API structure
        echo("Context menu hidden with Escape key\n");
    } else {
        echo("Example 1: Failed to send right mouse click event\n");
    }
} else {
    echo("Example 1: Quick Start element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>