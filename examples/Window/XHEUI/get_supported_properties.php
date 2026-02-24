<?php
// Scenario: Demonstrates how to get the supported properties of a UI element

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

// Example 1: Get supported properties
$supportedProperties = $xheElement->get_supported_properties();

if ($supportedProperties && is_array($supportedProperties)) {
    echo("Example 1: Successfully retrieved supported properties\n");
    echo("Supported properties:\n");
    foreach($supportedProperties as $index => $property) {
        echo("  Property #" . ($index + 1) . ": " . $property . "\n");
    }
} else {
    echo("Example 1: Failed to retrieve supported properties or no properties available\n");
}

// Quit the application
WINDOW::$app->quit();
?>