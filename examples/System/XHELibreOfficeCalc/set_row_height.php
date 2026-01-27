<?php
// Scenario: Set row height in LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Increase height of row 8 to 1.6cm in the first sheet: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$rowIndex = 8;
$height = "1.6cm";
$res1 = SYSTEM::$libreOfficeCalc->set_row_height($filePath, $sheetIndex, $rowIndex, $height);
$res1 = $res1 ? 'true' : 'false';
echo("Height set: $res1\n");



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>