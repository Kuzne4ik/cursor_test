<?php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate getting cell values from an Excel file

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get cell value at row 1, column A (index 1)
echo("\n\nExample 1: Get cell value at row 1, column A\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowIndex = 1;
$colIndex = 1;
echo("File path: $filePath, Sheet index: $sheetIndex, Row: $rowIndex, Column: $colIndex\n");
$cellValue = SYSTEM::$excelDataReader->get_cell($filePath, $sheetIndex, $rowIndex, $colIndex);
echo("Cell value: $cellValue\n");

// Example 2: Get cell value at row 2, column B (index 2)
echo("\nExample 2: Get cell value at row 2, column B\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowIndex = 2;
$colIndex = 2;
echo("File path: $filePath, Sheet index: $sheetIndex, Row: $rowIndex, Column: $colIndex\n");
$cellValue = SYSTEM::$excelDataReader->get_cell($filePath, $sheetIndex, $rowIndex, $colIndex);
echo("Cell value: $cellValue\n");

// Example 3: Get cell value at row 1, column C (index 3)
echo("\nExample 3: Get cell value at row 1, column C\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowIndex = 1;
$colIndex = 3;
echo("File path: $filePath, Sheet index: $sheetIndex, Row: $rowIndex, Column: $colIndex\n");
$cellValue = SYSTEM::$excelDataReader->get_cell($filePath, $sheetIndex, $rowIndex, $colIndex);
echo("Cell value: $cellValue\n");

// Example 4: Get cell value with invalid column index (error case)
echo("\nExample 4: Get cell value with invalid column index (error case)\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowIndex = 5;
$colIndex = 25;
echo("File path: $filePath, Sheet index: $sheetIndex, Row: $rowIndex, Column: $colIndex (invalid)\n");
$cellValue = SYSTEM::$excelDataReader->get_cell($filePath, $sheetIndex, $rowIndex, $colIndex);
echo("Cell value: $cellValue\n");


// Quit the application
WINDOW::$app->quit();
?>
