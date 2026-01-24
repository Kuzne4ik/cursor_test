<?php 
// Scenario: Demonstrates how to add a new sheet to an Excel file and get sheets count

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Add a new sheet to an Excel file
echo("\nExample 1: Add a new sheet to an Excel file\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetName = "new sheet1";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Add new sheet to Excel file
$result = SYSTEM::$excel->add_sheet($filePath, $sheetName);
if ($result) {
    echo("Sheet added successfully with name: $sheetName\n");
} else {
    echo("Failed to add sheet with name: $sheetName\n");
}

// Example 2: Get the number of sheets in an Excel file
echo("\nExample 2: Get the number of sheets in an Excel file\n");

// Get sheets count
$sheetsCount = SYSTEM::$excel->get_sheets_count($filePath);
if ($sheetsCount > 0) {
    echo("Number of sheets in Excel file: $sheetsCount\n");
} else {
    echo("Failed to get sheets count or no sheets found\n");
}

// Quit the application
WINDOW::$app->quit();
?>
