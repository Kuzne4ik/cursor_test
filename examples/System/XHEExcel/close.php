<?php 
// Scenario: Demonstrates how to open, read cell data, and close an Excel file

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

// Example 1: Open an Excel file
echo("\nExample 1: Open an Excel file\n");

// Set variables for method arguments
$openVisible = false;

// Open Excel file
$result = SYSTEM::$excel->open($filePath, $openVisible);
if ($result) {
    echo("Excel file opened successfully: $filePath\n");
} else {
    echo("Failed to open Excel file: $filePath\n");
}

// Get row and column count
$rowsCount = SYSTEM::$excel->get_rows_count($filePath, 0);
$colsCount = SYSTEM::$excel->get_cols_count($filePath, 0);

echo("Rows count: $rowsCount, Columns count: $colsCount\n");

// Example 2: Display all cell data
echo("\nExample 2: Display all cell data\n");

for ($i = 1; $i <= $rowsCount; $i++) {
    for ($j = 1; $j <= $colsCount; $j++) {
        $cellValue = SYSTEM::$excel->get_cell($filePath, 0, $i, $j);
        echo($cellValue . "|");
    }
    echo("\n");
}

// Example 3: Close the Excel file
echo("\nExample 3: Close the Excel file\n");

// Close Excel file
$result = SYSTEM::$excel->close($filePath);
if ($result) {
    echo("Excel file closed successfully: $filePath\n");
} else {
    echo("Failed to close Excel file: $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
