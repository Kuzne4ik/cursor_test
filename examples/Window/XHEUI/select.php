<?php
// Scenario: Demonstrates how to select a UI element

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

// Example 1: Select the UI element
$result = $xheElement->select();

if ($result) {
    echo("Example 1: Successfully selected the UI element\n");
    echo("The element is now in a selected state\n");
} else {
    echo("Example 1: Failed to select the UI element\n");
    echo("The element may not support selection or is already selected\n");
}

// Quit the application
WINDOW::$app->quit();
?>