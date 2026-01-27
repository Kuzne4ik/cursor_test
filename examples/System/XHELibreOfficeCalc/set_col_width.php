<?php
// Scenario: Set column width in LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Increase width of column 1 to 5cm in the first sheet: \n";
$filePath = "test/test.ods";
$sheetIndex = 0;
$columnIndex = 1;
$width = "5cm";
$res1 = SYSTEM::$libreOfficeCalc->set_col_width($filePath, $sheetIndex, $columnIndex, $width);
$res1 = $res1 ? 'true' : 'false';
echo "Width set: $res1\n";



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>