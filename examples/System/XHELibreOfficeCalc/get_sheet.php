<?php
// Scenario: Get sheet data from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get sheet content as array: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$sheetData = SYSTEM::$libreOfficeCalc->get_sheet($filePath, $sheetIndex);
print_r($sheetData);



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>