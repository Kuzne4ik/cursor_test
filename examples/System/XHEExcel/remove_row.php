<?php 
// Scenario: Demonstrates how to remove a specific row from an Excel sheet

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
$rowNumber = 7;

// Example 1: Remove a specific row from the Excel sheet
echo("\nExample 1: Remove row #$rowNumber from the Excel sheet\n");
$result = SYSTEM::$excel->remove_row($filePath, $sheetIndex, $rowNumber);
if ($result) {
    echo("Successfully removed row #$rowNumber from sheet #$sheetIndex\n");
} else {
    echo("Failed to remove row #$rowNumber from sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
