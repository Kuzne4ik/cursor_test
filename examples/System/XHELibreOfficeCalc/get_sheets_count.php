<?php
// Scenario: Get sheets count from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get number of sheets: \n");
$filePath = "test/test.ods";
$sheetsCount = $libreOfficeCalc->get_sheets_count($filePath);
echo("Number of sheets: $sheetsCount\n");

// Let's see the result
$app->shell_execute("open", $filePath);

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>