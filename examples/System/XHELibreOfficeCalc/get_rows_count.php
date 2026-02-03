<?php
// Scenario: Get row count from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >libreOfficeCalc->" . basename (__FILE__) . "</span>\n";

// Example 1
echo("1. Get number of rows in the first sheet: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$rowsCount = SYSTEM::$libreOfficeCalc->get_rows_count($filePath, $sheetIndex);
echo("Number of rows: $rowsCount\n");

// Example 2
echo("\n\n2. Get number of rows in the fifth sheet: \n");
$sheetIndex = 4;
$rowsCount = SYSTEM::$libreOfficeCalc->get_rows_count($filePath, $sheetIndex);
echo("Number of rows: $rowsCount\n");

// Example 3
echo("\n\n3. Get number of rows in the seventh sheet (total sheets: 5): \n");
$sheetIndex = 6;
$rowsCount = SYSTEM::$libreOfficeCalc->get_rows_count($filePath, $sheetIndex);
echo("Number of rows: $rowsCount\n");



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>