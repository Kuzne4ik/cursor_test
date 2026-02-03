<?php 
// Scenario: Demonstrates how to remove duplicate rows in a specified range of an Excel file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Remove duplicates in a range
echo("\nExample 1: Remove duplicates in a range\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 1;
$rangeStart = "A1";
$rangeEnd = "D20";
$keyColumn = "A";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Remove duplicates in a range
$result = SYSTEM::$excel->dedupe_range($filePath, $sheetIndex, $rangeStart, $rangeEnd, $keyColumn);
if ($result) {
    echo("Successfully removed duplicates in range $rangeStart:$rangeEnd using column $keyColumn as key\n");
} else {
    echo("Failed to remove duplicates in range $rangeStart:$rangeEnd using column $keyColumn as key\n");
}

// Quit the application
WINDOW::$app->quit();
?>
