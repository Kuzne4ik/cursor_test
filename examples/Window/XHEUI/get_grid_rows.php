<?php
// Scenario: Demonstrates how to get the number of rows in a grid UI element

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

// Example 1: Get number of rows in the grid
$rowCount = $xheElement->get_grid_rows();

if ($rowCount !== null && $rowCount >= 0) {
    echo("Example 1: Successfully retrieved grid row count\n");
    echo("Number of rows: " . $rowCount . "\n");
} else {
    echo("Example 1: Failed to retrieve grid row count or element is not a grid\n");
}

// Quit the application
WINDOW::$app->quit();
?>