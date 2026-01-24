<?php
// Scenario: Split an Excel sheet by rows into multiple files
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

// Example 1: Split sheet by rows into multiple files
// Set arguments as variables
$filePath = "test/test.xlsx";
$outputFolder = "sheets";
$sheetIndex = 0;
$rowsPerFile = 4;

echo("\n\n1. Split sheet by rows into multiple files: ");
$result = SYSTEM::$excel->split_sheet_by_rows($filePath, $outputFolder, $sheetIndex, $rowsPerFile);
if ($result) {
    echo("Success - Sheet split by rows into files with $rowsPerFile rows per file in '$outputFolder' folder\n");
} else {
    echo("Failed - Could not split sheet by rows into files with $rowsPerFile rows per file\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

