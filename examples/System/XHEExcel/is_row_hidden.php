<?php 
// Scenario: Demonstrates how to check if a row is hidden in an Excel sheet

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
$rowNumber1 = 1;
$rowNumber2 = 8;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Check if row #1 is hidden
echo("\nExample 1: Check if row #$rowNumber1 is hidden\n");
$isHidden1 = SYSTEM::$excel->is_row_hidden($filePath, $sheetIndex, $rowNumber1);
if ($isHidden1 !== null) {
    if ($isHidden1) {
        echo("Row #$rowNumber1 is hidden\n");
    } else {
        echo("Row #$rowNumber1 is visible\n");
    }
} else {
    echo("Failed to check if row #$rowNumber1 is hidden\n");
}

// Example 2: Check if row #8 is hidden
echo("\nExample 2: Check if row #$rowNumber2 is hidden\n");
$isHidden2 = SYSTEM::$excel->is_row_hidden($filePath, $sheetIndex, $rowNumber2);
if ($isHidden2 !== null) {
    if ($isHidden2) {
        echo("Row #$rowNumber2 is hidden\n");
    } else {
        echo("Row #$rowNumber2 is visible\n");
    }
} else {
    echo("Failed to check if row #$rowNumber2 is hidden\n");
}

// Quit the application
WINDOW::$app->quit();
?>
