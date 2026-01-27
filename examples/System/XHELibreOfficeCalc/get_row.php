<?php
// Scenario: Get row data from LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1
echo("1. Get first row as array: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$rowIndex = 1;
$items = $libreOfficeCalc->get_row($filePath, $sheetIndex, $rowIndex);
$itemsCount = count($items);

$alphachar = range('A', 'Z');

for ($k = 0; $k < $itemsCount; $k++) {
    if (array_key_exists($k, $alphachar))
		echo($alphachar[$k] . '('.  ($k  + 1) .') =>'. $items[$k]. PHP_EOL);
	else
		echo(($k  + 1) . '=>'. $items[$k]. PHP_EOL);
}
  
// Let's see the result
$app->shell_execute("open", $filePath);

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>