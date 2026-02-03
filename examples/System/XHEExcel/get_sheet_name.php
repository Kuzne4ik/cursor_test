<?php 
// Scenario: Demonstrates how to get the name of a sheet by its index in an Excel workbook

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
$sheetIndex1 = 0;
$sheetIndex2 = 1;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get name of sheet #0
echo("\nExample 1: Get name of sheet #$sheetIndex1\n");
$sheetName1 = SYSTEM::$excel->get_sheet_name($filePath, $sheetIndex1);
if ($sheetName1 !== null) {
    echo("Sheet #$sheetIndex1 has name: '$sheetName1'\n");
} else {
    echo("Failed to get name of sheet #$sheetIndex1\n");
}

// Example 2: Get name of sheet #1
echo("\nExample 2: Get name of sheet #$sheetIndex2\n");
$sheetName2 = SYSTEM::$excel->get_sheet_name($filePath, $sheetIndex2);
if ($sheetName2 !== null) {
    echo("Sheet #$sheetIndex2 has name: '$sheetName2'\n");
} else {
    echo("Failed to get name of sheet #$sheetIndex2\n");
}

// Quit the application
WINDOW::$app->quit();
?>
