<?php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate getting the number of columns in a sheet

// Kill any existing Excel processes
$excel->kill();

// Example 1: Get number of columns in sheet 0
echo("\n\nExample 1: Get number of columns in sheet 0\n");
$filePath = "test/test.xlsx";
$sheetIndex = 0;
echo("File path: $filePath, Sheet index: $sheetIndex\n");
$colsCount = $excelDataReader->get_cols_count($filePath, $sheetIndex);
echo("Number of columns: $colsCount\n");

// Example 2: Get number of columns in sheet 4 (error case)
echo("\nExample 2: Get number of columns in sheet 4 (error case)\n");
$filePath = "test/test.xlsx";
$sheetIndex = 4;
echo("File path: $filePath, Sheet index: $sheetIndex (invalid)\n");
$colsCount = $excelDataReader->get_cols_count($filePath, $sheetIndex);
echo("Number of columns: $colsCount\n");

// Quit the application
$app->quit();
?>
