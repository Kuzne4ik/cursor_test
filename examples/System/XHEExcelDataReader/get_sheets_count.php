<?php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate getting the number of sheets in an Excel file

// info
echo "\n<span >excelDataReader->" . basename (__FILE__) . "</span>\n";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Get number of sheets in Excel file
echo("\n\nExample 1: Get number of sheets in Excel file\n");
$filePath = "test/test.xlsx";
echo("File path: $filePath\n");
$sheetsCount = SYSTEM::$excelDataReader->get_sheets_count($filePath);
echo("Number of sheets: $sheetsCount\n");


// Quit the application
WINDOW::$app->quit();
?>
