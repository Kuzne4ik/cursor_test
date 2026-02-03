<?php 
// Scenario: Demonstrates how to add a row with data to an Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Add a row with data to an Excel sheet
echo("\nExample 1: Add a row with data to an Excel sheet\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 1;
$rowData = array(1, 2, 3, 4, 5, 6, 7, 8);

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Add row to Excel sheet
$result = SYSTEM::$excel->add_row($filePath, $sheetIndex, $rowData);
if ($result) {
    echo("Row added successfully to sheet: $sheetIndex\n");
    echo("Row data: " . implode(", ", $rowData) . "\n");
} else {
    echo("Failed to add row to sheet: $sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
