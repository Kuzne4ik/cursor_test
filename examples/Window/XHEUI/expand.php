<?php
// Scenario: Demonstrates how to expand a UI element (like a tree node or collapsible panel)

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

// Example 1: Expand the UI element
$result = $xheElement->expand();

if ($result) {
    echo("Example 1: Successfully expanded the UI element\n");
} else {
    echo("Example 1: Failed to expand the UI element\n");
}

// Quit the application
WINDOW::$app->quit();
?>