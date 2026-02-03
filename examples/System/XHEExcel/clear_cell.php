<?php 
// Scenario: Demonstrates how to clear the content of a cell in an Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Clear the content of a cell in an Excel sheet
echo("\nExample 1: Clear the content of a cell in an Excel sheet\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$row = 6;
$column = "A";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Clear cell content
$result = SYSTEM::$excel->clear_cell($filePath, $sheetIndex, $row, $column);
if ($result) {
    echo("Cell content cleared successfully at row $row, column $column\n");
} else {
    echo("Failed to clear cell content at row $row, column $column\n");
}

// Quit the application
WINDOW::$app->quit();
?>
