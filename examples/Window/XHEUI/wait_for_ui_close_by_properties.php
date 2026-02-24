<?php
// Scenario: Demonstrates how to wait for a UI element to close by multiple properties

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

// Example 1: Wait for UI element to close by multiple properties
$properties = array("Name" => "Quick Start", "IsSelectionItemPatternAvailable" => "true");
$result = $xheElement->wait_for_ui_close_by_properties($properties);

if ($result) {
    echo("Example 1: Successfully waited for UI element to close\n");
    echo("The UI element matching the specified properties has closed\n");
} else {
    echo("Example 1: Failed to wait for UI element to close\n");
    echo("The UI element may not have closed or doesn't match the properties\n");
}

// Quit the application
WINDOW::$app->quit();
?>