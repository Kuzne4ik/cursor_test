<?php
$xhe_host = "127.0.0.1:7013";

// Connect functional objects if not already connected
if (!isset($path)) {
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting column values with type support
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 0: Remove column types dictionary
$sheetNumber = 3;
echo("\nExample 0: Remove column types dictionary for sheet $sheetNumber : ");
// Extract method arguments into variables
$excelFilePath = "test/test.xlsx";
$result = SYSTEM::$excelfile->remove_column_types_dict($excelFilePath, $sheetNumber);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 1: Set column 5 with type support
echo("\nExample 1: Set column 5 with type support in sheet $sheetNumber : ");
// Extract method arguments into variables
$columnNumber1 = 5;
$dataArray = array('04.01.2025', '04.02.2025', '04.03.2025', '04.04.2025', '04.05.2025');
echo("\nData array for insertion: ");
var_export($dataArray);
$asText = false;
$result = SYSTEM::$excelfile->set_col($excelFilePath, $sheetNumber, $columnNumber1, $dataArray, $asText);
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
$columnsTypesArray[6] = "DateTime";

echo("\nColumn types array for sheet $sheetNumber:  ");
var_export($columnsTypesArray);
$result = SYSTEM::$excelfile->set_column_types_dict($excelFilePath, $sheetNumber, $columnsTypesArray);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 3: Set column 6 with type support by dictionary
echo("\nExample 3: Set column 6 with type support by dictionary in sheet $sheetNumber : ");
// Extract method arguments into variables
$columnNumber2 = 6;
$asText2 = false;
$result = SYSTEM::$excelfile->set_col($excelFilePath, $sheetNumber, $columnNumber2, $dataArray, $asText2);
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

// Example 5: Set column 7, all cells as text
echo("\nExample 5: Set column 7, all cells as text, in sheet $sheetNumber : ");
// Extract method arguments into variables
$columnNumber3 = 7;
$asText3 = true;
$result = SYSTEM::$excelfile->set_col($excelFilePath, $sheetNumber, $columnNumber3, $dataArray, $asText3);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result
WINDOW::$app->shell_execute("open", $excelFilePath);

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
