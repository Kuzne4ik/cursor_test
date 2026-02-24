<?php
// Scenario: Demonstrates how to get a specific property value of a UI element

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

// Example 1: Get element information
$elementInfo = $xheElement->get_info();

if ($elementInfo) {
    echo("Example 1: Successfully retrieved UI element information\n");
    echo("Element Name: " . $elementInfo->Name . "\n");
    echo("Element Type: " . $elementInfo->LocalizedControlType . "\n");
    
    // Step: Get specific property value
    $propertyName = "Name";
    $nameValue = $xheElement->get_property($propertyName);
    $nameLength = strlen($nameValue);
    
    echo("Example 2: Retrieved property '$propertyName' with length: $nameLength\n");
    echo("Property value: " . $nameValue . "\n");
} else {
    echo("Example 1: Failed to retrieve UI element information\n");
}

// Quit the application
WINDOW::$app->quit();
?>