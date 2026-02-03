<?php
// Scenario: Set width for a column in an Excel file
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

// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$visibility = false;
$readOnly = true;

// Open Excel file
echo("\nOpen Excel file: $filePath\n");
SYSTEM::$excel->open($filePath, $visibility, $readOnly);

// Example 1: Set column width
// Set arguments as variables
$columnNumber = 1;
$widthValue = 50;

echo("\n\n1. Set column width: ");
$result = SYSTEM::$excel->set_col_width($filePath, $sheetIndex, $columnNumber, $widthValue);
if ($result) {
    echo("Success - Column $columnNumber width set to $widthValue\n");
} else {
    echo("Failed - Could not set column $columnNumber width to $widthValue\n");
}

// Note: Save and close operations are commented out in the original code
// SYSTEM::$excel->save($filePath);
// SYSTEM::$excel->close($filePath);

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

