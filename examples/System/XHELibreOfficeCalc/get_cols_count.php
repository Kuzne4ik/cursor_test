<?php
// Scenario: Get column count from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get number of columns in the first sheet: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$colsCount = $libreOfficeCalc->get_cols_count($filePath, $sheetIndex);
echo("Number of columns: $colsCount\n");

// Let's see the result
$app->shell_execute("open", $filePath);

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>