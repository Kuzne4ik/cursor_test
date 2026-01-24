<?php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate getting the number of rows in a sheet

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get number of rows in sheet 0
echo("\n\nExample 1: Get number of rows in sheet 0\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
echo("File path: $filePath, Sheet index: $sheetIndex\n");
$rowsCount = SYSTEM::$excelDataReader->get_rows_count($filePath, $sheetIndex);
echo("Number of rows: $rowsCount\n");

// Example 2: Get number of rows in sheet 4 (error case)
echo("\nExample 2: Get number of rows in sheet 4 (error case)\n");
$filePath = "test/test.xlsx";
$sheetIndex = 4;
echo("File path: $filePath, Sheet index: $sheetIndex (invalid)\n");
$rowsCount = SYSTEM::$excelDataReader->get_rows_count($filePath, $sheetIndex);
echo("Number of rows: $rowsCount\n");

// Example 3: Get number of rows in sheet 6 (error case - value from 0)
echo("\nExample 3: Get number of rows in sheet 6 (error case - value from 0)\n");
$filePath = "test/test.xlsx";
$sheetIndex = 6;
echo("File path: $filePath, Sheet index: $sheetIndex (invalid)\n");
$rowsCount = SYSTEM::$excelDataReader->get_rows_count($filePath, $sheetIndex);
echo("Number of rows: $rowsCount\n");


// Quit the application
WINDOW::$app->quit();
?>
