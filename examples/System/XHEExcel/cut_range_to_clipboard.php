<?php 
// Scenario: Demonstrates how to cut a range of cells to clipboard and paste it to another location

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Kill all Excel processes
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

// Example 2: Set row values
echo("\nExample 2: Set row values\n");

// Set variables for method arguments
$sheetIndex = 1;
$rowIndex = 1;
$rowData = array('Завод "Э"', 2, 3, 4, 5, 6, 7, 8);

// Set row values
$result = SYSTEM::$excel->set_row($filePath, $sheetIndex, $rowIndex, $rowData);
if ($result) {
    echo("Successfully set values for row $rowIndex\n");
} else {
    echo("Failed to set values for row $rowIndex\n");
}

// Example 3: Cut range to clipboard
echo("\nExample 3: Cut range to clipboard\n");

// Set variables for method arguments
$sourceSheetIndex = 1;
$sourceRangeStart = "A1";
$sourceRangeEnd = "D10";

// Cut range to clipboard
$result = SYSTEM::$excel->cut_range_to_clipboard($filePath, $sourceSheetIndex, $sourceRangeStart, $sourceRangeEnd);
if ($result) {
    echo("Successfully cut range $sourceRangeStart:$sourceRangeEnd to clipboard\n");
} else {
    echo("Failed to cut range $sourceRangeStart:$sourceRangeEnd to clipboard\n");
}

// Save Excel file
$result = SYSTEM::$excel->save($filePath);
if ($result) {
    echo("Successfully saved Excel file: $filePath\n");
} else {
    echo("Failed to save Excel file: $filePath\n");
}

// Wait for 2 seconds
sleep(2);

// Example 4: Paste range from clipboard
echo("\nExample 4: Paste range from clipboard\n");

// Set variables for method arguments
$targetSheetIndex = 1;
$targetRow = 11;
$targetColumn = "D";

// Paste range from clipboard
$result = SYSTEM::$excel->paste_range_from_clipboard($filePath, $targetSheetIndex, $targetRow, $targetColumn);
if ($result) {
    echo("Successfully pasted range from clipboard to sheet $targetSheetIndex, row $targetRow, column $targetColumn\n");
} else {
    echo("Failed to paste range from clipboard to sheet $targetSheetIndex, row $targetRow, column $targetColumn\n");
}

// Save Excel file
$result = SYSTEM::$excel->save($filePath);
if ($result) {
    echo("Successfully saved Excel file: $filePath\n");
} else {
    echo("Failed to save Excel file: $filePath\n");
}

// Wait for 3 seconds to observe the result
sleep(3);

// Example 5: Close Excel file
echo("\nExample 5: Close Excel file\n");

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
