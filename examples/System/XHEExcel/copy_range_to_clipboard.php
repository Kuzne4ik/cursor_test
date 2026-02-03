<?php 
// Scenario: Demonstrates how to copy a range of cells to clipboard and paste it to another location

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Open Excel file
echo("\nExample 1: Open Excel file\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$visible = false;
$readOnly = true;

// Open Excel file
$result = SYSTEM::$excel->open($filePath, $visible, $readOnly);
if ($result) {
    echo("Successfully opened Excel file: $filePath\n");
} else {
    echo("Failed to open Excel file: $filePath\n");
}

// Example 2: Copy range to clipboard
echo("\nExample 2: Copy range to clipboard\n");

// Set variables for method arguments
$sheetIndex = 0;
$rangeStart = "A1";
$rangeEnd = "D10";

// Copy range to clipboard
$result = SYSTEM::$excel->copy_range_to_clipboard($filePath, $sheetIndex, $rangeStart, $rangeEnd);
if ($result) {
    echo("Successfully copied range $rangeStart:$rangeEnd to clipboard\n");
} else {
    echo("Failed to copy range $rangeStart:$rangeEnd to clipboard\n");
}

// Example 3: Paste range from clipboard
echo("\nExample 3: Paste range from clipboard\n");

// Set variables for method arguments
$targetSheetIndex = 2;
$targetRow = 1;
$targetColumn = "A";

// Paste range from clipboard
$result = SYSTEM::$excel->paste_range_from_clipboard($filePath, $targetSheetIndex, $targetRow, $targetColumn);
if ($result) {
    echo("Successfully pasted range from clipboard to sheet $targetSheetIndex, row $targetRow, column $targetColumn\n");
} else {
    echo("Failed to paste range from clipboard to sheet $targetSheetIndex, row $targetRow, column $targetColumn\n");
}

// Wait for 10 seconds to observe the result
sleep(10);

// Example 4: Close Excel file
echo("\nExample 4: Close Excel file\n");

// Close Excel file
$result = SYSTEM::$excel->close($filePath);
if ($result) {
    echo("Successfully closed Excel file: $filePath\n");
} else {
    echo("Failed to close Excel file: $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
