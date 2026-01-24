<?php 
// Scenario: Demonstrates how to add multiple rows with data to an Excel sheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Add multiple rows with data to an Excel sheet
echo("\nExample 1: Add multiple rows with data to an Excel sheet\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 4;
$rowsData = array(
    array(0, 1, 2),
    array(3, 4, 5),
    array(6, 7, 8),
    array(9, 10, 11),
);

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Add multiple rows to Excel sheet
$result = SYSTEM::$excel->add_rows($filePath, $sheetIndex, $rowsData);
if ($result) {
    echo("Multiple rows added successfully to sheet: $sheetIndex\n");
    echo("Number of rows added: " . count($rowsData) . "\n");
} else {
    echo("Failed to add multiple rows to sheet: $sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
