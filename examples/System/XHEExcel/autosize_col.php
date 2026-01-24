<?php 
// Scenario: Demonstrates how to set cell text and autosize columns and rows in an Excel sheet

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
$openVisible = false;
$debugMode = true;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Open the Excel file
SYSTEM::$excel->open($filePath, $openVisible, $debugMode);

// Example 1: Set cell text with large content
echo("\nExample 1: Set cell text with large content\n");

// Set variables for method arguments
$sheetIndex = 0;
$row = 7;
$column = "A";
$cellText = "new large large large large large large large large text";

// Set cell text
$result = SYSTEM::$excel->set_cell($filePath, $sheetIndex, $row, $column, $cellText);
if ($result) {
    echo("Cell text set successfully at row $row, column $column\n");
} else {
    echo("Failed to set cell text at row $row, column $column\n");
}

// Example 2: Autosize row and column to fit content
echo("\nExample 2: Autosize row and column to fit content\n");

// Set variables for method arguments
$autosizeSheetIndex = 0;

// Autosize row
$result = SYSTEM::$excel->autosize_row($filePath, $autosizeSheetIndex);
if ($result) {
    echo("Row autosized successfully for sheet: $autosizeSheetIndex\n");
} else {
    echo("Failed to autosize row for sheet: $autosizeSheetIndex\n");
}

// Autosize column
$result = SYSTEM::$excel->autosize_col($filePath, $autosizeSheetIndex);
if ($result) {
    echo("Column autosized successfully for sheet: $autosizeSheetIndex\n");
} else {
    echo("Failed to autosize column for sheet: $autosizeSheetIndex\n");
}

// Save and close the Excel file
SYSTEM::$excel->save($filePath);
SYSTEM::$excel->close($filePath);

// Quit the application
WINDOW::$app->quit();
?>
