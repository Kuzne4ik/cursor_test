<?php
// Scenario: Sort an Excel sheet by column or all columns
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

// Example 2: Sort sheet by column in ascending order
// Set arguments as variables
$sheetIndex = 0;
$sortColumn = "C"; // Column C
$ascending = true;

echo("\n2. Sort sheet by column in ascending order: ");
$result = SYSTEM::$excel->sort_sheet($filePath, $sheetIndex, $sortColumn, $ascending);
if ($result) {
    echo("Success - Sheet sorted by column '$sortColumn' in ascending order\n");
} else {
    echo("Failed - Could not sort sheet by column '$sortColumn' in ascending order\n");
}

// Example 3: Sort sheet by all columns in descending order
// Set arguments as variables
$sortColumnAll = "3"; // Column 3 (same as C)
$ascending = false;

echo("\n3. Sort sheet by all columns in descending order: ");
$result = SYSTEM::$excel->sort_sheet($filePath, $sheetIndex, $sortColumnAll, $ascending);
if ($result) {
    echo("Success - Sheet sorted by all columns in descending order\n");
} else {
    echo("Failed - Could not sort sheet by all columns in descending order\n");
}

// Close the Excel file
echo("\n4. Close the Excel file: ");
$result = SYSTEM::$excel->close($filePath);
if ($result) {
    echo("Success - Excel file '$filePath' closed\n");
} else {
    echo("Failed - Could not close Excel file '$filePath'\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

