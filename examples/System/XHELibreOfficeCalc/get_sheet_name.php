<?php
// Scenario: Get sheet name from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get name of the first sheet: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$sheetName = SYSTEM::$libreOfficeCalc->get_sheet_name($filePath, $sheetIndex);
echo("Sheet name: $sheetName\n");

// Example 2
echo("\n\n2. Get name of the second sheet: \n");
$sheetIndex = 1;
$sheetName = SYSTEM::$libreOfficeCalc->get_sheet_name($filePath, $sheetIndex);
echo("Sheet name: $sheetName\n");



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>