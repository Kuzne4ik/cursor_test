<?php 
// Scenario: Demonstrates how to add and clear autofilters in an Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Add autofilter to Excel sheet
echo("\nExample 1: Add autofilter to Excel sheet\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$range = "1:200";
$field = 1;
$criteria = "1";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Open the Excel file
$openVisible = false;
$debugMode = true;
SYSTEM::$excel->open($filePath, $openVisible, $debugMode);

// Add autofilter
$result = SYSTEM::$excel->add_autofilter($filePath, $sheetIndex, $range, $field, $criteria);
if ($result) {
    echo("Autofilter added successfully to range: $range\n");
} else {
    echo("Failed to add autofilter to range: $range\n");
}

// Example 2: Clear autofilters from Excel sheet
echo("\nExample 2: Clear autofilters from Excel sheet\n");

// Set variables for method arguments
$clearSheetIndex = 0;

// Clear autofilters
$result = SYSTEM::$excel->clear_autofilters($filePath, $clearSheetIndex);
if ($result) {
    echo("Autofilters cleared successfully from sheet: $clearSheetIndex\n");
} else {
    echo("Failed to clear autofilters from sheet: $clearSheetIndex\n");
}

// Save and close the Excel file
SYSTEM::$excel->save($filePath);
SYSTEM::$excel->close($filePath);

// Quit the application
WINDOW::$app->quit();
?>
