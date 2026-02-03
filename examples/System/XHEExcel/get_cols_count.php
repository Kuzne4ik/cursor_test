<?php 
// Scenario: Demonstrates how to get the number of columns in an Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$specificRowIndex = 7;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get number of columns in a sheet
echo("\nExample 1: Get number of columns in a sheet\n");
$colsCount = SYSTEM::$excel->get_cols_count($filePath, $sheetIndex);
if ($colsCount !== null) {
    echo("Sheet #$sheetIndex has $colsCount columns\n");
} else {
    echo("Failed to get column count for sheet #$sheetIndex\n");
}

// Example 2: Get number of columns in a specific row
echo("\nExample 2: Get number of columns in a specific row\n");
$colsCountInRow = SYSTEM::$excel->get_cols_count($filePath, $sheetIndex, $specificRowIndex);
if ($colsCountInRow !== null) {
    echo("Row #$specificRowIndex in sheet #$sheetIndex has $colsCountInRow columns\n");
} else {
    echo("Failed to get column count for row #$specificRowIndex in sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
