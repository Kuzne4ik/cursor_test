<?php 
// Scenario: Demonstrates how to copy a range of cells to clipboard and paste it to another location in Excel

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
$visible = false;
$debug = true;
$sheetIndex = 0;
$sourceRangeStart = "A1";
$sourceRangeEnd = "D10";
$targetSheetIndex = 2;
$targetRow = 1;
$targetColumn = "A";

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

// Example 2: Copy a range of cells to clipboard
echo("\nExample 2: Copy a range of cells to clipboard\n");
$result3 = SYSTEM::$excel->copy_range_to_clipboard($filePath, $sheetIndex, $sourceRangeStart, $sourceRangeEnd);
if ($result3) {
    echo("Successfully copied range from $sourceRangeStart to $sourceRangeEnd to clipboard\n");
} else {
    echo("Failed to copy range from $sourceRangeStart to $sourceRangeEnd to clipboard\n");
}

// Example 3: Paste the range from clipboard to another location
echo("\nExample 3: Paste the range from clipboard to another location\n");
$result4 = SYSTEM::$excel->paste_range_from_clipboard($filePath, $targetSheetIndex, $targetRow, $targetColumn);
if ($result4) {
    echo("Successfully pasted range from clipboard to sheet $targetSheetIndex, row $targetRow, column $targetColumn\n");
} else {
    echo("Failed to paste range from clipboard to sheet $targetSheetIndex, row $targetRow, column $targetColumn\n");
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
