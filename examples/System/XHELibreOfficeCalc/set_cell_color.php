<?php
// Scenario: Set cell colors in LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Set orange font and green background for cell [2,3]: \n";
$filePath = "test/test.ods";
$sheetIndex = 0;
$row = 2;
$column = 3;
$fontColor = "#e75322";
$backgroundColor = "#22e74a";
$res1 = SYSTEM::$libreOfficeCalc->set_cell_color($filePath, $sheetIndex, $row, $column, $fontColor, $backgroundColor);
$res1 = $res1 ? 'true' : 'false';
echo "Colors set: $res1\n";

// Example 2
echo "\n\n2. Set orange font and blue background for cell [5,1]: \n";
$row = 5;
$column = 1;
$fontColor = "#e75322";
$backgroundColor = "#227ee7";
$res2 = SYSTEM::$libreOfficeCalc->set_cell_color($filePath, $sheetIndex, $row, $column, $fontColor, $backgroundColor);
$res2 = $res2 ? 'true' : 'false';
echo "Colors set: $res2\n";



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>