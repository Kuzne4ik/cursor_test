<?php 
// Scenario: Demonstrates how to get the number of sheets in an Excel workbook

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

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get number of sheets in a workbook
echo("\nExample 1: Get number of sheets in a workbook\n");
$sheetsCount = SYSTEM::$excel->get_sheets_count($filePath);
if ($sheetsCount !== null) {
    echo("Workbook $filePath has $sheetsCount sheets\n");
} else {
    echo("Failed to get sheets count for workbook $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
