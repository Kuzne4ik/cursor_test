<?php 
// Scenario: Demonstrates how to connect to an Excel file by window handle (HWND)

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

// Example 1: Open Excel file using shell execute
echo("\nExample 1: Open Excel file using shell execute\n");

// Set variables for method arguments
$shellOperation = "open";

// Open Excel file using shell execute
$result = $app->shell_execute($shellOperation, $filePath);
if ($result) {
    echo("Excel file opened using shell execute: $filePath\n");
} else {
    echo("Failed to open Excel file using shell execute: $filePath\n");
}

// Wait for Excel to open
sleep(5);

// Get window handle
$windowHandle = $window->get_by_class("XLMAIN", true, false)->get_hwnd();
$pathAlias = "@doc1";

// Example 2: Connect to Excel by HWND
echo("\nExample 2: Connect to Excel by HWND\n");

// Connect to Excel by HWND
$result = SYSTEM::$excel->connect_by_hwnd($windowHandle, $pathAlias);
if ($result) {
    echo("Connected to Excel successfully by HWND with alias: $pathAlias\n");
} else {
    echo("Failed to connect to Excel by HWND with alias: $pathAlias\n");
}

// Get row and column count
$rowsCount = SYSTEM::$excel->get_rows_count($pathAlias, 0);
$colsCount = SYSTEM::$excel->get_cols_count($pathAlias, 0);

echo("Rows count: $rowsCount, Columns count: $colsCount\n");

// Example 3: Display all cell data
echo("\nExample 3: Display all cell data\n");

for ($k = 1; $k <= $rowsCount; $k++) {
    for ($j = 1; $j <= $colsCount; $j++) {
        $cellValue = SYSTEM::$excel->get_cell($pathAlias, 0, $k, $j);
        echo($cellValue . "|");
    }
    echo("\n");
}

// Example 4: Close the Excel file
echo("\nExample 4: Close the Excel file\n");

// Close Excel file
$result = SYSTEM::$excel->close($pathAlias);
if ($result) {
    echo("Excel file closed successfully with alias: $pathAlias\n");
} else {
    echo("Failed to close Excel file with alias: $pathAlias\n");
}

// Quit the application
WINDOW::$app->quit();
?>
