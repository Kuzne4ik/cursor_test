<?php
// Scenario: Set values for a row in an Excel file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<font color=blue>excel->".basename (__FILE__)."</font>\n";

// Kill all Excel processes
SYSTEM::$excel->kill();

// Excel file path
$filePath = "test/test.xlsx";

// Example 1: Set values for a row
// Set arguments as variables
$sheetIndex = 1;
$rowNumber = 1;
$rowData = array('Завод "Э"', 2, 3, 4, 5, 6, 7, 8);

echo("\n\n1. Set values for a row: ");
$result = SYSTEM::$excel->set_row($filePath, $sheetIndex, $rowNumber, $rowData);
if ($result) {
    echo("Success - Row $rowNumber data set\n");
} else {
    echo("Failed - Could not set data for row $rowNumber\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

