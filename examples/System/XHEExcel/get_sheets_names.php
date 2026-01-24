<?php 
// Scenario: Demonstrates how to get the names of all sheets in an Excel workbook

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

// Example 1: Get names of all sheets in a workbook
echo("\nExample 1: Get names of all sheets in a workbook\n");
$sheetsNames = SYSTEM::$excel->get_sheets_names($filePath, $sheetIndex);
if ($sheetsNames !== null) {
    echo("Successfully retrieved sheet names from workbook $filePath\n");
    echo("Sheet names:\n");
    print_r($sheetsNames);
} else {
    echo("Failed to get sheet names from workbook $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
