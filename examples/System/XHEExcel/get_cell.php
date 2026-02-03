<?php 
// Scenario: Demonstrates how to get the content of a specific cell in an Excel file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowIndex = 1;
$columnIndex = 3;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Open Excel file
echo("\nExample 1: Open Excel file\n");
$result = SYSTEM::$excel->open($filePath, true, true);
if ($result) {
    echo("Successfully opened file $filePath\n");
} else {
    echo("Failed to open file $filePath\n");
}

// Example 2: Get cell content
echo("\nExample 2: Get cell content\n");
$cellContent = SYSTEM::$excel->get_cell($filePath, $sheetIndex, $rowIndex, $columnIndex);
if ($cellContent !== null) {
    echo("Content of cell at row #$rowIndex, column #$columnIndex: '$cellContent'\n");
} else {
    echo("Failed to get content of cell at row #$rowIndex, column #$columnIndex\n");
}

// Close the Excel file
SYSTEM::$excel->close($filePath);

// Quit the application
WINDOW::$app->quit();
?>
