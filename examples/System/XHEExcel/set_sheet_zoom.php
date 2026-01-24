<?php
// Scenario: Set the zoom level for a sheet in an Excel file
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

// Example 1: Open the Excel file
// Set arguments as variables
$filePath = "test/test.xlsx";
$visible = false;
$debug = true;

echo("\n\n1. Open the Excel file: ");
$result = SYSTEM::$excel->open($filePath, $visible, $debug);
if ($result) {
    echo("Success - Excel file '$filePath' opened\n");
} else {
    echo("Failed - Could not open Excel file '$filePath'\n");
}

// Example 2: Set the zoom level for the sheet
// Set arguments as variables
$sheetIndex = 0;
$zoomLevel = 400; // 400% zoom

echo("\n2. Set the zoom level for the sheet: ");
$result = SYSTEM::$excel->set_sheet_zoom($filePath, $sheetIndex, $zoomLevel);
if ($result) {
    echo("Success - Sheet zoom level set to $zoomLevel%\n");
} else {
    echo("Failed - Could not set sheet zoom level to $zoomLevel%\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

