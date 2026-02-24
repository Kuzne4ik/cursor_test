<?php
// Scenario: Demonstrates how to find a UI element by multiple properties

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

// Example 1: Find element by multiple properties
$properties = array("Name" => "Quick Start", "IsSelectionItemPatternAvailable" => "true");
$foundElement = $xheElement->get_by_properties($properties);

if ($foundElement && $foundElement->is_exist()) {
    $elementInfo = $foundElement->get_info();
    echo("Example 1: Found element: " . $elementInfo->Name . "\n");
} else {
    echo("Example 1: No element found matching the specified properties\n");
}

// Quit the application
WINDOW::$app->quit();
?>