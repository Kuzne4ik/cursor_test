<?php
// Scenario: Demonstrates how to get a specific item from a grid UI element

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

// Example 1: Get grid item at specific row and column
$rowIndex = 0;
$columnIndex = 0;
$gridItem = $xheElement->get_grid_item($rowIndex, $columnIndex);

if ($gridItem && $gridItem->is_exist()) {
    $itemInfo = $gridItem->get_info();
    echo("Example 1: Successfully retrieved grid item at row $rowIndex, column $columnIndex\n");
    echo("Grid item name: " . $itemInfo->Name . "\n");
} else {
    echo("Example 1: Failed to retrieve grid item at row $rowIndex, column $columnIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>