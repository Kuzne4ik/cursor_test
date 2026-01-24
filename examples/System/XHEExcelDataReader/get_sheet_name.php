<?php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate getting sheet names by index

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get name of first sheet (index 0)
echo("\n\nExample 1: Get name of first sheet (index 0)\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
echo("File path: $filePath, Sheet index: $sheetIndex\n");
$sheetName = SYSTEM::$excelDataReader->get_sheet_name($filePath, $sheetIndex);
echo("Sheet name: $sheetName\n");

// Example 2: Get name of second sheet (index 1)
echo("\nExample 2: Get name of second sheet (index 1)\n");
$filePath = "test/test.xlsx";
$sheetIndex = 1;
echo("File path: $filePath, Sheet index: $sheetIndex\n");
$sheetName = SYSTEM::$excelDataReader->get_sheet_name($filePath, $sheetIndex);
echo("Sheet name: $sheetName\n");

// Quit the application
WINDOW::$app->quit();
?>
