<?php
// Scenario: Set height for a row in an Excel file
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

// Set arguments as variables
$filePath = "test/test.xlsx";
$visibility = false;
$readOnly = true;

// Open Excel file
echo("\nOpen Excel file: $filePath\n");
SYSTEM::$excel->open($filePath, $visibility, $readOnly);

// Example 1: Set row height
// Set arguments as variables
$sheetIndex = 0;
$rowNumber = 1;
$heightValue = 50;

echo("\n\n1. Set row height: ");
$result = SYSTEM::$excel->set_row_height($filePath, $sheetIndex, $rowNumber, $heightValue);
if ($result) {
    echo("Success - Row $rowNumber height set to $heightValue\n");
} else {
    echo("Failed - Could not set row $rowNumber height to $heightValue\n");
}

// Note: Save and close operations are commented out in the original code
// SYSTEM::$excel->save($filePath);
// SYSTEM::$excel->close($filePath);

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

