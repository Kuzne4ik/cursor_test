<?php $xhe_host = "127.0.0.1:7015";

// Connect functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// Scenario: Demonstrate saving Excel file
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Open file
echo("\nExample 1: Open file : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$result = SYSTEM::$excelfile->open($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Display all cells
echo("\nExample 2: Display all cells : ");
$rowsCount = SYSTEM::$excelfile->get_rows_count($filePath, $sheetNumber);
$colsCount = SYSTEM::$excelfile->get_cols_count($filePath, $sheetNumber);
for ($i = 1; $i <= $rowsCount; $i++) {
    for ($j = 1; $j <= $colsCount; $j++) {
        echo SYSTEM::$excelfile->get_cell($filePath, $sheetNumber, $i, $j) . "|";
    }
    echo "\n";
}

// Example 3: Copy cells to sheet 2 with new colors
echo("\nExample 3: Copy cells to sheet 2 with new colors : ");
$targetSheet = 1;
$backgroundColor = "FF0000FF";
$textColor = "FFFFFF00";
for ($i = 1; $i <= $rowsCount; $i++) {
    for ($j = 1; $j <= $colsCount; $j++) {
        $cellValue = SYSTEM::$excelfile->get_cell($filePath, $sheetNumber, $i, $j);
        SYSTEM::$excelfile->set_cell($filePath, $targetSheet, $i, $j, $cellValue);
        SYSTEM::$excelfile->set_cell_background_color($filePath, $targetSheet, $i, $j, $backgroundColor);
        SYSTEM::$excelfile->set_cell_color($filePath, $targetSheet, $i, $j, $textColor);
    }
    echo "\n";
}

// Example 4: Save file
echo("\nExample 4: Save file : ");
$result = SYSTEM::$excelfile->save($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 5: Close file
echo("\nExample 5: Close file : ");
$result = SYSTEM::$excelfile->close($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result


// End of script
echo "\n";

// Quit
WINDOW::$app->quit();
?>