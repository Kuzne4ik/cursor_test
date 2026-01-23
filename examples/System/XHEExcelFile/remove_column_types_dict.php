<?php
$xhe_host = "127.0.0.1:7013";

// Connect functional objects if not already connected
if (!isset($path)) {
    $path = "../../../../../Templates/init.php";
    require($path);
}

// Scenario: Demonstrate removing column types dictionary from Excel sheet
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Extract method arguments into variables
$excelFilePath = "test/test.xlsx";
$sheetNumber = 1;

// Data array for insertion into sheet
$sheet_array = array
(
    array(1, 2, '14.08.2025', '001', true, true),
    array(2, 2, '15.09.2025', '001', true, true),
    array(3, 2, '14.08.2026', '001', false, false),
    array(4, 2, '14.08.2026', '001', false, false)
);

// Example 0: Remove column types from dictionary for this file and sheet
echo("\nExample 0: Remove column types from dictionary for sheet $sheetNumber");
echo(SYSTEM::$excelfile->remove_column_types_dict($excelFilePath, $sheetNumber));

// Example 2: Add column types to dictionary for this file and sheet
echo("\nExample 2: Add column types to dictionary for sheet $sheetNumber: ");

// Allowed column types: Text, Number, TimeSpan, DateTime, Boolean, Formula
$columns_types_array = array();
$columns_types_array[0] = "Text";  // this is a placeholder, such column does not exist
$columns_types_array[1] = "Text";
$columns_types_array[2] = "Text";
$columns_types_array[3] = "Text";
$columns_types_array[4] = "Text";
$columns_types_array[5] = "Text";
$columns_types_array[6] = "Text";
$columns_types_array[7] = "Text";
$columns_types_array[8] = "Text";
$columns_types_array[9] = "Text";
$columns_types_array[10] = "Number";
$columns_types_array[11] = "Number";
$columns_types_array[12] = "DateTime";
$columns_types_array[13] = "Text";
$columns_types_array[14] = "Boolean";

echo ("\nColumn types array for sheet $sheetNumber:  ");
var_export($columns_types_array);
echo(SYSTEM::$excelfile->set_column_types_dict($excelFilePath, $sheetNumber, $columns_types_array));

// Example 3: Set sheet content from array with typing by dictionary
echo("\nExample 3: Set sheet 1 content from array starting cell 10:10 with typing by dictionary in sheet $sheetNumber: ");
echo(SYSTEM::$excelfile->set_sheet($excelFilePath, 1, $sheet_array, 3000, 10, 10, false));

// Example 4: Remove column types from dictionary for this file and sheet
echo("\nExample 4: Remove column types from dictionary for sheet $sheetNumber: ");
echo("\n" . SYSTEM::$excelfile->remove_column_types_dict($excelFilePath, $sheetNumber));

// View the result
WINDOW::$app->shell_execute("open", $excelFilePath);

// Quit
WINDOW::$app->quit();
?>
