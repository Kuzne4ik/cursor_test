<?php 
// Scenario: Demonstrates how to get font information for a specific cell in an Excel file

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
$sheetIndex = 0;
$rowIndex = 6;
$columnLetter = "A";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get cell font information
echo("\nExample 1: Get font information for a cell\n");
$cellFont = SYSTEM::$excel->get_cell_font($filePath, $sheetIndex, $rowIndex, $columnLetter);
if ($cellFont !== null) {
    echo("Successfully retrieved font information for cell at row #$rowIndex, column $columnLetter\n");
    echo("Font details:\n");
    print_r($cellFont);
} else {
    echo("Failed to get font information for cell at row #$rowIndex, column $columnLetter\n");
}

// Quit the application
WINDOW::$app->quit();
?>
