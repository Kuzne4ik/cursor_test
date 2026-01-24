<?php
// Scenario: Set numeric format for all cells in a row in an Excel file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Kill existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Set numeric format for all cells in a row
// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 1;
$formatType = "Currency";

echo("\n\n1. Set numeric format for all cells in a row: ");
$result = SYSTEM::$excel->set_row_format($filePath, $sheetIndex, $rowNumber, $formatType);
if ($result) {
    echo("Success - Row $rowNumber format set to '$formatType'\n");
} else {
    echo("Failed - Could not set row $rowNumber format to '$formatType'\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

