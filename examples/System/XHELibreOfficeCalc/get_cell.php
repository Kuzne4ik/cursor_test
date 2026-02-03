<?php
// Scenario: Get cell values from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >libreOfficeCalc->" . basename (__FILE__) . "</span>\n";

// Example 1
echo("1. Get text of cell (3, 1): \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$row = 3;
$column = 1;
$cellValue = SYSTEM::$libreOfficeCalc->get_cell($filePath, $sheetIndex, $row, $column);
echo("Cell value: $cellValue\n");

// Example 2
echo("\n\n2. Get text of cell V1: \n");
$row = 1;
$column = 22;
$cellValue = SYSTEM::$libreOfficeCalc->get_cell($filePath, $sheetIndex, $row, $column);
echo("Cell [1, 22] value: $cellValue\n");

// Example 3
echo("\n\n3. Get text of cell W1 (virtual copy of V1): \n");
$row = 1;
$column = 23;
$cellValue = SYSTEM::$libreOfficeCalc->get_cell($filePath, $sheetIndex, $row, $column);
echo("Cell [1, 23] value: $cellValue\n");
          
// Example 4
echo("\n\n4. Get text of cell X1 (virtual copy of V1): \n");
$row = 1;
$column = 24;
$cellValue = SYSTEM::$libreOfficeCalc->get_cell($filePath, $sheetIndex, $row, $column);
echo("Cell [1, 24] value: $cellValue\n");


 
// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>