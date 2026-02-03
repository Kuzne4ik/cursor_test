<?php
// Scenario: Set a name for a range of cells in an Excel file
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

// Example 1: Set a name for a range of cells
// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$startCell = "A1";
$endCell = "C3";
$rangeName = "__Name__";

echo("\n\n1. Set a name for a range of cells: ");
$result = SYSTEM::$excel->set_range_name($filePath, $sheetIndex, $startCell, $endCell, $rangeName);
if ($result) {
    echo("Success - Range '$startCell:$endCell' named as '$rangeName'\n");
} else {
    echo("Failed - Could not name range '$startCell:$endCell' as '$rangeName'\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

