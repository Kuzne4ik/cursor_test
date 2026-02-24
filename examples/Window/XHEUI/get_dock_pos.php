<?php
// Scenario: Demonstrates how to get the current dock position of a UI element

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

// Example 1: Get current dock position
$dockPosition = $xheElement->get_dock_pos();

if ($dockPosition !== null && $dockPosition !== "") {
    echo("Example 1: Successfully retrieved dock position\n");
    echo("Current dock position: " . $dockPosition . "\n");
} else {
    echo("Example 1: Failed to retrieve dock position or element is not docked\n");
}

// Quit the application
WINDOW::$app->quit();
?>