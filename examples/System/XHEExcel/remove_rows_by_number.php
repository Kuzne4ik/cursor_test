<?php 
// Scenario: Demonstrates how to remove multiple consecutive rows from an Excel sheet by specifying the starting row and count

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
$startRow = 7;
$rowCount = 3;

// Example 1: Remove multiple consecutive rows from the Excel sheet
echo("\nExample 1: Remove $rowCount consecutive rows starting from row #$startRow\n");
$result = SYSTEM::$excel->remove_rows_by_number($filePath, $sheetIndex, $startRow, $rowCount);
if ($result) {
    echo("Successfully removed $rowCount rows starting from row #$startRow in sheet #$sheetIndex\n");
} else {
    echo("Failed to remove $rowCount rows starting from row #$startRow in sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
