<?php
// Scenario: Demonstrates how to get the clickable point coordinates of a UI element

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

// Example 1: Get clickable point of the UI element
$clickablePoint = $xheElement->get_clickable_point();

if ($clickablePoint && is_array($clickablePoint)) {
    echo("Example 1: Successfully retrieved clickable point\n");
    echo("Clickable point coordinates: X=" . $clickablePoint[0] . ", Y=" . $clickablePoint[1] . "\n");
} else {
    echo("Example 1: Failed to retrieve clickable point\n");
}

// Quit the application
WINDOW::$app->quit();
?>