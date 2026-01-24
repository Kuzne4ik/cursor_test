<?php 
// Scenario: Demonstrates how to get the number of rows in an Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 0;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get number of rows in a sheet
echo("\nExample 1: Get number of rows in a sheet\n");
$rowsCount = SYSTEM::$excel->get_rows_count($filePath, $sheetIndex);
if ($rowsCount !== null) {
    echo("Sheet #$sheetIndex has $rowsCount rows\n");
} else {
    echo("Failed to get row count for sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
