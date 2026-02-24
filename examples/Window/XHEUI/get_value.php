<?php
// Scenario: Demonstrates how to get the value property of a UI element

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

// Example 1: Get value property
$elementValue = $xheElement->get_value();

if ($elementValue !== null) {
    echo("Example 1: Successfully retrieved element value\n");
    echo("Element value: '" . $elementValue . "'\n");
    echo("Value length: " . strlen($elementValue) . " characters\n");
} else {
    echo("Example 1: Failed to retrieve element value or element has no value property\n");
}

// Quit the application
WINDOW::$app->quit();
?>