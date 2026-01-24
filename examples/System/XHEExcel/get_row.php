<?php 
// Scenario: Demonstrates how to get the content of a specific row in an Excel sheet

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
$rowNumber1 = 1;
$rowNumber2 = 2;
$rowNumber3 = 3;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get row #1
echo("\nExample 1: Get row #$rowNumber1\n");
$rowData1 = SYSTEM::$excel->get_row($filePath, $sheetIndex, $rowNumber1);
if ($rowData1 !== null) {
    echo("Successfully retrieved row #$rowNumber1\n");
    echo("Row content:\n");
    print_r($rowData1);
} else {
    echo("Failed to get row #$rowNumber1\n");
}

// Example 2: Get row #2
echo("\nExample 2: Get row #$rowNumber2\n");
$rowData2 = SYSTEM::$excel->get_row($filePath, $sheetIndex, $rowNumber2);
if ($rowData2 !== null) {
    echo("Successfully retrieved row #$rowNumber2\n");
    echo("Row content:\n");
    print_r($rowData2);
} else {
    echo("Failed to get row #$rowNumber2\n");
}

// Example 3: Get row #3
echo("\nExample 3: Get row #$rowNumber3\n");
$rowData3 = SYSTEM::$excel->get_row($filePath, $sheetIndex, $rowNumber3);
if ($rowData3 !== null) {
    echo("Successfully retrieved row #$rowNumber3\n");
    echo("Row content:\n");
    print_r($rowData3);
} else {
    echo("Failed to get row #$rowNumber3\n");
}

// Quit the application
WINDOW::$app->quit();
?>
