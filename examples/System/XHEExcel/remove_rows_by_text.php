<?php
// Scenario: Remove rows containing specific text in a column
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Example 1: Remove rows containing text
SYSTEM::$excel->kill();
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$searchText = "1";
$column = "A";

echo("1. Remove rows containing text '$searchText' in column '$column': ");
$result = SYSTEM::$excel->remove_rows_by_text($filePath, $sheetIndex, $searchText, $column);
if ($result) {
    echo("Successfully removed rows containing '$searchText' in column '$column'\n");
} else {
    echo("Failed to remove rows containing '$searchText' in column '$column'\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

