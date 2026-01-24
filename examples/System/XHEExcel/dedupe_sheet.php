<?php 
// Scenario: Demonstrates how to remove duplicate rows in an entire Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Remove duplicates in a sheet
echo("\nExample 1: Remove duplicates in a sheet\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 1;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Remove duplicates in a sheet
$result = SYSTEM::$excel->dedupe_sheet($filePath, $sheetIndex);
if ($result) {
    echo("Successfully removed duplicates in sheet #$sheetIndex\n");
} else {
    echo("Failed to remove duplicates in sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
