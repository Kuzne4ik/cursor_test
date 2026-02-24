<?php
// Scenario: Demonstrates how to get the expanded state of a UI element

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

// Example 1: Get expanded state
$expandedState = $xheElement->get_expanded_state();

if ($expandedState !== null) {
    echo("Example 1: Successfully retrieved expanded state\n");
    if ($expandedState) {
        echo("The element is expanded\n");
    } else {
        echo("The element is collapsed\n");
    }
} else {
    echo("Example 1: Failed to retrieve expanded state or element does not support expansion\n");
}

// Quit the application
WINDOW::$app->quit();
?>