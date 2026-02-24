<?php
// Scenario: Demonstrates how to get the number of columns in a grid UI element

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

// Example 1: Get number of columns in the grid
$columnCount = $xheElement->get_grid_cols();

if ($columnCount !== null && $columnCount >= 0) {
    echo("Example 1: Successfully retrieved grid column count\n");
    echo("Number of columns: " . $columnCount . "\n");
} else {
    echo("Example 1: Failed to retrieve grid column count or element is not a grid\n");
}

// Quit the application
WINDOW::$app->quit();
?>