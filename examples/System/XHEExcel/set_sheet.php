<?php
// Scenario: Set sheet content from an array in an Excel file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";

// Kill existing Excel processes
SYSTEM::$excel->kill();

// Excel file path
$filePath = "test/test.xlsx";

// Example 1: Set sheet content from an array
// Set arguments as variables
$sheetIndex = 4;
$sheetArray = array(
    array(11, 12, 13),
    array(21, 22, 23),
    array(31, 32, 33, 44, 55),
);
$timeout = 3000;
$rowOffset = 5;
$colOffset = 10;

echo("\n\n1. Set sheet content from an array: ");
$result = SYSTEM::$excel->set_sheet($filePath, $sheetIndex, $sheetArray, $timeout, $rowOffset, $colOffset);
if ($result) {
    echo("Success - Sheet $sheetIndex content set from array\n");
} else {
    echo("Failed - Could not set sheet $sheetIndex content from array\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

