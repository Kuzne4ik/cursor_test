<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting sheet values with type support
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 0: Remove column types dictionary for sheet $sheetNumber : ";
// Extract method arguments into variables
$excelFilePath = "test/test.xlsx";
$sheetNumber = 1;
$result = SYSTEM::$excelfile->remove_column_types_dict($excelFilePath, $sheetNumber);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 1: Set sheet content from array with type support JSON
echo("\nExample 1: Set sheet content from array start cell 5:10 with type support in sheet $sheetNumber : ");
// Extract method arguments into variables
$sheetArray = array(
    array(1, 2, '14.08.2025', '001', true, true),
    array(2, 2, '15.09.2025', '001', true, true),
    array(3, 2, '14.08.2026', '001', true, true),
    array(4, 2, '14.08.2025', '001', true, true)
);
$startRow = 5;
$startCol = 10;
$timeout = 3000;
$asText = false;
$result = SYSTEM::$excelfile->set_sheet($excelFilePath, $sheetNumber, $sheetArray, $timeout, $startRow, $startCol, $asText);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Add column types dictionary
echo("\nExample 2: Add column types dictionary for sheet $sheetNumber : ");
// Extract method arguments into variables
// Valid column types: Text, Number, TimeSpan, DateTime, Boolean, Formula
$columnsTypesArray = array();
$columnsTypesArray[0] = "Text"; // placeholder, this column does not exist
$columnsTypesArray[1] = "Text";
$columnsTypesArray[2] = "Text";
$columnsTypesArray[3] = "Text";
$columnsTypesArray[4] = "Text";
$columnsTypesArray[5] = "Text";
$columnsTypesArray[6] = "Text";
$columnsTypesArray[7] = "Text";
$columnsTypesArray[8] = "Text";
$columnsTypesArray[9] = "Text";
$columnsTypesArray[10] = "Text";
$columnsTypesArray[11] = "Text";
$columnsTypesArray[12] = "Text";
$columnsTypesArray[13] = "Text";
$columnsTypesArray[14] = "Text";
$columnsTypesArray[15] = "Boolean";

echo("\nColumn types array for sheet $sheetNumber:  ");
var_export($columnsTypesArray);
$result = SYSTEM::$excelfile->set_column_types_dict($excelFilePath, $sheetNumber, $columnsTypesArray);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 3: Set sheet content from array with type support by dictionary
echo("\nExample 3: Set sheet content from array start cell 5:10 with type support by dictionary in sheet $sheetNumber : ");
// Extract method arguments into variables
$asText2 = false;
$result = SYSTEM::$excelfile->set_sheet($excelFilePath, $sheetNumber, $sheetArray, $timeout, $startRow, $startCol, $asText2);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 4: Remove column types dictionary
echo("\nExample 4: Remove column types dictionary for sheet $sheetNumber : ");
// Extract method arguments into variables
$result = SYSTEM::$excelfile->remove_column_types_dict($excelFilePath, $sheetNumber);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 5: Set sheet content from array, all cells as text, in sheet $sheetNumber
echo("\nExample 5: Set sheet content from array, all cells as text, in sheet $sheetNumber : ");
// Extract method arguments into variables
$asText3 = true;
$result = SYSTEM::$excelfile->set_sheet($excelFilePath, $sheetNumber, $sheetArray, $timeout, $startRow, $startCol, $asText3);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result
WINDOW::$app->shell_execute("open", $excelFilePath);

// End of script
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
