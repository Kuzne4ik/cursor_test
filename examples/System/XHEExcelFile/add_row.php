<?php
$xhe_host = "127.0.0.1:7013";

// Connect functional objects
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Scenario: Demonstrate adding rows with different data types and column type dictionaries
echo "\n<span style=\"color: blue; \">excelfile->" .basename (__FILE__). "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Excel file path and sheet number
$excelFilePath = "test/test.xlsx";
$sheetNumber = 0;

// Data array for insertion
$data_array = array(1, 2.1, '04.08.2025', '001', true);
echo("\nData array for insertion: ");
var_export($data_array);

// Example 0: Remove column types dictionary for this file and sheet
echo("\nExample 0: Remove column types dictionary for sheet $sheetNumber: ");
echo(SYSTEM::$excelfile->remove_column_types_dict($excelFilePath, $sheetNumber));

// Header row
$headerRow = array("Data with typing obtained from JSON serialization");
SYSTEM::$excelfile->add_row($excelFilePath, $sheetNumber, $headerRow);

// Example 1: Add new row with JSON typing
// For JSON, date cell will get date value as date if string is date in ISO 8601 format. Example: '2012-04-21T18:25:43-03:00'
echo("\nExample 1: Add new row with typing to sheet $sheetNumber: ");
// Extract method arguments into variables
$asStrings1 = false;
echo(SYSTEM::$excelfile->add_row($excelFilePath, $sheetNumber, $data_array, $asStrings1));

// Example 2: Add column types to dictionary for this file and sheet
echo("\nExample 2: Add column types to dictionary for sheet $sheetNumber: ");

// Extract method arguments into variables - column types array
// Valid column types: Text, Number, TimeSpan, DateTime, Boolean, Formula
$columns_types_array = array();
$columns_types_array[0] = "Text"; // this is a placeholder, such column doesn't exist
$columns_types_array[1] = "Number";
$columns_types_array[2] = "Number";
$columns_types_array[3] = "DateTime";
$columns_types_array[4] = "Text";
$columns_types_array[5] = "Boolean";

echo ("\nColumn types array for sheet $sheetNumber:  ");
var_export($columns_types_array);
echo(SYSTEM::$excelfile->set_column_types_dict($excelFilePath, $sheetNumber, $columns_types_array));

// Header row. Will cause error as this column expects type "Number"
$errorHeaderRow = array("Data with typing obtained from dictionary for this file's sheet");
SYSTEM::$excelfile->add_row($excelFilePath, $sheetNumber, $errorHeaderRow);

// Example 3: Add new row with typing by dictionary
echo("\nExample 3: Add new row with typing by dictionary to sheet $sheetNumber: ");
// Extract method arguments into variables
$asStrings3 = false;
echo(SYSTEM::$excelfile->add_row($excelFilePath, $sheetNumber, $data_array, $asStrings3));

// Example 4: Remove column types from dictionary for this file and sheet
echo("\nExample 4: Remove column types from dictionary for sheet $sheetNumber: ");
echo(SYSTEM::$excelfile->remove_column_types_dict($excelFilePath, $sheetNumber));

// Header row
$stringHeaderRow = array("Data with each cell typed as string");
SYSTEM::$excelfile->add_row($excelFilePath, $sheetNumber, $stringHeaderRow);

// Example 5: Add new row with all cells as strings
echo("\nExample 5: Add new row, all cells are strings, to sheet $sheetNumber: ");
// Extract method arguments into variables
$asStrings5 = true;
echo(SYSTEM::$excelfile->add_row($excelFilePath, $sheetNumber, $data_array, $asStrings5));

// View the result
WINDOW::$app->shell_execute("open", $excelFilePath);

// Quit
WINDOW::$app->quit();
?>