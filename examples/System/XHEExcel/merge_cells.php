<?php 
// Scenario: Demonstrates how to merge and unmerge cells in an Excel sheet

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
$cellRangeStart = "A1";
$cellRangeEnd = "D1";
$visible = true;
$debug = true;

// Example 1: Kill any existing Excel processes and open the file
echo("\nExample 1: Kill any existing Excel processes and open the file\n");
$result1 = SYSTEM::$excel->kill();
if ($result1) {
    echo("Successfully killed existing Excel processes\n");
} else {
    echo("Failed to kill existing Excel processes\n");
}

$result2 = SYSTEM::$excel->open($filePath, $visible, $debug);
if ($result2) {
    echo("Successfully opened Excel file: $filePath\n");
} else {
    echo("Failed to open Excel file: $filePath\n");
}

// Example 2: Merge cells in the specified range
echo("\nExample 2: Merge cells in the specified range\n");
$result3 = SYSTEM::$excel->merge_cells($filePath, $sheetIndex, $cellRangeStart, $cellRangeEnd);
if ($result3) {
    echo("Successfully merged cells from $cellRangeStart to $cellRangeEnd\n");
} else {
    echo("Failed to merge cells from $cellRangeStart to $cellRangeEnd\n");
}

// Pause to observe the result
sleep(10);

// Example 3: Unmerge cells in the specified range
echo("\nExample 3: Unmerge cells in the specified range\n");
$result4 = SYSTEM::$excel->unmerge_cells($filePath, $sheetIndex, $cellRangeStart, $cellRangeEnd);
if ($result4) {
    echo("Successfully unmerged cells from $cellRangeStart to $cellRangeEnd\n");
} else {
    echo("Failed to unmerge cells from $cellRangeStart to $cellRangeEnd\n");
}

// Pause to observe the result
sleep(10);

// Example 4: Close the Excel file
echo("\nExample 4: Close the Excel file\n");
$result5 = SYSTEM::$excel->close($filePath);
if ($result5) {
    echo("Successfully closed Excel file: $filePath\n");
} else {
    echo("Failed to close Excel file: $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
