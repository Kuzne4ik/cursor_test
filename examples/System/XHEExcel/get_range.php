<?php 
// Scenario: Demonstrates how to get the content of a specific range of cells in an Excel sheet

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
$range1Start = "A1";
$range1End = "C3";
$range2Start = "A1";
$range2End = "A10";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get content of a range as array '0!A1:C3'
echo("\nExample 1: Get content of range $range1Start:$range1End as array\n");
$rangeData1 = SYSTEM::$excel->get_range($filePath, $sheetIndex, $range1Start, $range1End);
if ($rangeData1 !== null) {
    echo("Successfully retrieved range data for $range1Start:$range1End\n");
    echo("Range content:\n");
    print_r($rangeData1);
} else {
    echo("Failed to get range data for $range1Start:$range1End\n");
}

// Example 2: Get content of a range as array '0!A1:A10'
echo("\nExample 2: Get content of range $range2Start:$range2End as array\n");
$rangeData2 = SYSTEM::$excel->get_range($filePath, $sheetIndex, $range2Start, $range2End);
if ($rangeData2 !== null) {
    echo("Successfully retrieved range data for $range2Start:$range2End\n");
    echo("Range content:\n");
    print_r($rangeData2);
} else {
    echo("Failed to get range data for $range2Start:$range2End\n");
}

// Quit the application
WINDOW::$app->quit();
?>
