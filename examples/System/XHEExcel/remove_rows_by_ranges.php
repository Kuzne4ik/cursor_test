<?php 
// Scenario: Demonstrates how to remove multiple ranges of rows from an Excel sheet using a range string

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
$rangeString = "7-9,14-20";

// Example 1: Remove multiple ranges of rows from the Excel sheet
echo("\nExample 1: Remove multiple ranges of rows from the Excel sheet\n");
echo("Removing rows in ranges: $rangeString\n");
$result = SYSTEM::$excel->remove_rows_by_ranges($filePath, $sheetIndex, $rangeString);
if ($result) {
    echo("Successfully removed rows in ranges: $rangeString from sheet #$sheetIndex\n");
} else {
    echo("Failed to remove rows in ranges: $rangeString from sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
