<?php 
// Scenario: Demonstrates how to get the content of an entire Excel sheet as an array

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
$maxCells = 3000;
$visibleOnly = true;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get content of a sheet as array
echo("\nExample 1: Get content of a sheet as array\n");
$sheetData = SYSTEM::$excel->get_sheet($filePath, $sheetIndex);
if ($sheetData !== null) {
    echo("Successfully retrieved sheet data from sheet #$sheetIndex\n");
    echo("Sheet content:\n");
    print_r($sheetData);
} else {
    echo("Failed to get sheet data from sheet #$sheetIndex\n");
}

// Example 2: Get content of a sheet as array (only visible cells)
echo("\nExample 2: Get content of a sheet as array (only visible cells)\n");
$sheetDataVisible = SYSTEM::$excel->get_sheet($filePath, $sheetIndex, $maxCells, $visibleOnly);
if ($sheetDataVisible !== null) {
    echo("Successfully retrieved visible sheet data from sheet #$sheetIndex\n");
    echo("Visible sheet content:\n");
    print_r($sheetDataVisible);
} else {
    echo("Failed to get visible sheet data from sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
