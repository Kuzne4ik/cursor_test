<?php
// Scenario: Set a new name for a sheet in an Excel file
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

// Example 1: Set a new name for a sheet
// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$newSheetName = "Новое имя 2";

echo("\n\n1. Set a new name for a sheet: ");
$result = SYSTEM::$excel->set_sheet_name($filePath, $sheetIndex, $newSheetName);
if ($result) {
    echo("Success - Sheet $sheetIndex renamed to '$newSheetName'\n");
} else {
    echo("Failed - Could not rename sheet $sheetIndex to '$newSheetName'\n");
}

// Example 2: Get the sheet name to verify the change
echo("\n2. Get the sheet name to verify the change: ");
$currentSheetName = SYSTEM::$excel->get_sheet_name($filePath, $sheetIndex);
echo("Current sheet name: '$currentSheetName'\n");

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

