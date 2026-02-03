<?php 
// Scenario: Demonstrates how to get the index number of a sheet by its name in an Excel workbook

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
$sheetName1 = "Лист2";
$sheetName2 = "Лист1";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get number of sheet by name "Лист2"
echo("\nExample 1: Get number of sheet by name '$sheetName1'\n");
$sheetNumber1 = SYSTEM::$excel->get_sheet_number_by_name($filePath, $sheetName1);
if ($sheetNumber1 !== null) {
    echo("Sheet '$sheetName1' has number: $sheetNumber1\n");
} else {
    echo("Failed to get number of sheet '$sheetName1'\n");
}

// Example 2: Get number of sheet by name "Лист1"
echo("\nExample 2: Get number of sheet by name '$sheetName2'\n");
$sheetNumber2 = SYSTEM::$excel->get_sheet_number_by_name($filePath, $sheetName2);
if ($sheetNumber2 !== null) {
    echo("Sheet '$sheetName2' has number: $sheetNumber2\n");
} else {
    echo("Failed to get number of sheet '$sheetName2'\n");
}

// Quit the application
WINDOW::$app->quit();
?>
