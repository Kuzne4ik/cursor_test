<?php
// Scenario: Get sheet names from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>libreOfficeCalc->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get sheet names: \n");
$filePath = "test/test.ods";
$sheetsNames = SYSTEM::$libreOfficeCalc->get_sheets_names($filePath);
print_r($sheetsNames);



// Quit the application
WINDOW::$app->quit();
?>