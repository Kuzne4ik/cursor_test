<?php
// Scenario: Get cell values by position from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get text of cell (A3): \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$cellPosition = 'A3';
$cellValue = SYSTEM::$libreOfficeCalc->get_cell_by_position($filePath, $sheetIndex, $cellPosition);
echo("Cell value: $cellValue\n");

// Example 2
echo("\n\n2. Get text of cell V1: \n");
$cellPosition = 'V1';
$cellValue = SYSTEM::$libreOfficeCalc->get_cell_by_position($filePath, $sheetIndex, $cellPosition);
echo("Cell [1, 22] value: $cellValue\n");

// Example 3
echo("\n\n3. Get text of cell W1 (virtual copy of V1): \n");
$cellPosition = 'W1';
$cellValue = SYSTEM::$libreOfficeCalc->get_cell_by_position($filePath, $sheetIndex, $cellPosition);
echo("Cell [1, 23] value: $cellValue\n");

// Example 4
echo("\n\n4. Get text of cell X1 (virtual copy of V1): \n");
$cellPosition = 'X1';
$cellValue = SYSTEM::$libreOfficeCalc->get_cell_by_position($filePath, $sheetIndex, $cellPosition);
echo("Cell [1, 24] value: $cellValue\n");


 
// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>