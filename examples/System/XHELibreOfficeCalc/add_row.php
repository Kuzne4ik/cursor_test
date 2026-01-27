<?php
// Scenario: Add a new row to LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Add a new row to the spreadsheet: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$rowData = array(11, 22, 33);
$result = $libreOfficeCalc->add_row($filePath, $sheetIndex, $rowData);
$result = $result ? 'true' : 'false';
echo("Row added: $result\n");

// Let's see the result
$app->shell_execute("open", $filePath);

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>