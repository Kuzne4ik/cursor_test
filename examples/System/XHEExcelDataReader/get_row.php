<?php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate getting a row as an array from an Excel file

// Kill any existing Excel processes
$excel->kill();

// Example 1: Get row 2 as an array
echo("\n\nExample 1: Get row 2 as an array\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowIndex = 2;
echo("File path: $filePath, Sheet index: $sheetIndex, Row index: $rowIndex\n");
$items = $excelDataReader->get_row($filePath, $sheetIndex, $rowIndex);
$itemsCount = count($items);
echo("Number of items in row: $itemsCount\n");

// Create alphabet characters for column labels
$alphachar = range('A', 'Z');
$alphacharCount = count($alphachar);

// Display each cell value with column label
for ($k = 0; $k < $itemsCount; $k++)
{
    if ($alphacharCount > $k)
        echo("Column " . $alphachar[$k] . " (" . ($k + 1) . ") => " . $items[$k] . "\n");
    else
        echo("Column " . ($k + 1) . " => " . $items[$k] . "\n");
}

// Quit the application
$app->quit();
?>
