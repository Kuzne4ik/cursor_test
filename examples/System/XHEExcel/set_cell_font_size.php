<?php
// Scenario: Set font size for a specific cell in an Excel file
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

// Example 1: Set font size for a cell
// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 7;
$columnLetter = "A";
$fontSize = 18;

echo("\n\n1. Set font size for a cell: ");
$result = SYSTEM::$excel->set_cell_font_size($filePath, $sheetIndex, $rowNumber, $columnLetter, $fontSize);
if ($result) {
    echo("Success - Font size set to $fontSize for cell $columnLetter$rowNumber\n");
} else {
    echo("Failed - Could not set font size to $fontSize for cell $columnLetter$rowNumber\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

