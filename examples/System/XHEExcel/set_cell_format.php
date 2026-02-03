<?php
// Scenario: Set cell format for a specific cell in an Excel file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Kill existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Set numeric format for a cell
// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 19;
$columnLetter = "D";
$formatType = "Currency";

echo("\n\n1. Set numeric format for a cell: ");
$result = SYSTEM::$excel->set_cell_format($filePath, $sheetIndex, $rowNumber, $columnLetter, $formatType);
if ($result) {
    echo("Success - Cell format set to '$formatType' for cell $columnLetter$rowNumber\n");
} else {
    echo("Failed - Could not set cell format to '$formatType' for cell $columnLetter$rowNumber\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

