<?php
// Scenario: Set cell values in LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >libreOfficeCalc->" . basename (__FILE__) . "</span>\n";

// Example 1
echo("1. Set text of cell (8, 1): \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$row = 8;
$column = 1;
$cellValue = "99999";
$result = SYSTEM::$libreOfficeCalc->set_cell($filePath, $sheetIndex, $row, $column, $cellValue);
$result = $result ? 'true' : 'false';
echo("Cell set: $result\n");

// Example 2
echo("\n\n2. Get text of cell (8, 1): \n");
$cellValue = SYSTEM::$libreOfficeCalc->get_cell($filePath, $sheetIndex, $row, $column);
echo("Cell value: $cellValue\n");

// Example 3
echo("\n\n3. Set text of cell (5, 33): \n");
$row = 5;
$column = 33;
$cellValue = "new text 5";
$result = SYSTEM::$libreOfficeCalc->set_cell($filePath, $sheetIndex, $row, $column, $cellValue);
$result = $result ? 'true' : 'false';
echo("Cell set: $result\n");

// Example 4
echo("\n\n4. Get text of cell (5, 33): \n");
$cellValue = SYSTEM::$libreOfficeCalc->get_cell($filePath, $sheetIndex, $row, $column);
echo("Cell value: $cellValue\n");

// Example 5 (commented out)
//echo("\n\n5. Set formula: \n");
//$row = 10;
//$column = "B";
//$formula = "=SUM(B7:B9)";
//$result = SYSTEM::$libreOfficeCalc->set_cell($filePath, $sheetIndex, $row, $column, $formula);
//$result = $result ? 'true' : 'false';
//echo("Formula set: $result\n");
//$libreOfficeCalc->set_cell_type($filePath, $sheetIndex, $row, $column, "Number");



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>