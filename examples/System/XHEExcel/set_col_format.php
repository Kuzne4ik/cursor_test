<?php
// Scenario: Set format for all cells in a column in an Excel file
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

// Example 1: Set numeric format for all cells in a column
// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$columnNumber = 1;
$formatType = "Currency";

echo("\n\n1. Set numeric format for all cells in a column: ");
$result = SYSTEM::$excel->set_col_format($filePath, $sheetIndex, $columnNumber, $formatType);
if ($result) {
    echo("Success - Column $columnNumber format set to '$formatType'\n");
} else {
    echo("Failed - Could not set column $columnNumber format to '$formatType'\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

