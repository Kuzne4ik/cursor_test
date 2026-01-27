<?php
// Scenario: Get sheet number by name from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get sheet number by name: \n");
$filePath = "test/test.ods";
$sheetName = "Лист2";
$sheetNumber = SYSTEM::$libreOfficeCalc->get_sheet_number_by_name($filePath, $sheetName);
echo("Sheet number: $sheetNumber\n");

// Example 2
echo("\n\n2. Get sheet number by name (-1 if not found): \n");
$sheetName = "Лист1";
$sheetNumber = SYSTEM::$libreOfficeCalc->get_sheet_number_by_name($filePath, $sheetName);
echo("Sheet number: $sheetNumber\n");



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>