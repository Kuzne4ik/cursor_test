<?php
// Scenario: Merge and unmerge cells in an Excel sheet
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
$visible = true;
$debug = true;

echo("\n\n1. Open the Excel file: ");
$result = SYSTEM::$excel->open($filePath, $visible, $debug);
if ($result) {
    echo("Success - Excel file '$filePath' opened\n");
} else {
    echo("Failed - Could not open Excel file '$filePath'\n");
}

// Example 2: Merge cells in the sheet
// Set arguments as variables
$sheetIndex = 0;
$startCell = "A1";
$endCell = "D1";

echo("\n2. Merge cells in the sheet: ");
$result = SYSTEM::$excel->merge_cells($filePath, $sheetIndex, $startCell, $endCell);
if ($result) {
    echo("Success - Cells from '$startCell' to '$endCell' merged\n");
} else {
    echo("Failed - Could not merge cells from '$startCell' to '$endCell'\n");
}

// Pause to observe the merged cells
sleep(10);

// Example 3: Unmerge cells in the sheet
echo("\n3. Unmerge cells in the sheet: ");
$result = SYSTEM::$excel->unmerge_cells($filePath, $sheetIndex, $startCell, $endCell);
if ($result) {
    echo("Success - Cells from '$startCell' to '$endCell' unmerged\n");
} else {
    echo("Failed - Could not unmerge cells from '$startCell' to '$endCell'\n");
}

// Pause to observe the unmerged cells
sleep(10);

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

