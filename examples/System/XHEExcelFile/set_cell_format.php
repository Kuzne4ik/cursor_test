<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting cell format
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set cell type
echo("Example 1: Set cell type : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber = 5;
$columnLetter = "B";
$cellType = "Number";
$result = SYSTEM::$excelfile->set_cell_type($filePath, $sheetNumber, $rowNumber, $columnLetter, $cellType);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Set cell format (built-in)
echo("\nExample 2: Set cell format (built-in) : ");
// Extract method arguments into variables
$cellValue = "65.2311212";
SYSTEM::$excelfile->set_cell($filePath, $sheetNumber, $rowNumber, $columnLetter, $cellValue);
$formatIndex = 5;
$isBuiltIn = true;
$result = SYSTEM::$excelfile->set_cell_format($filePath, $sheetNumber, $rowNumber, $columnLetter, $formatIndex, $isBuiltIn);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 3: Set cell format (custom)
echo("\nExample 3: Set cell format (custom) : ");
// Extract method arguments into variables
$rowNumber2 = 6;
$cellValue2 = "65.2311212";
SYSTEM::$excelfile->set_cell($filePath, $sheetNumber, $rowNumber2, $columnLetter, $cellValue2);
$customFormat = "0.0000";
$isBuiltIn2 = false;
$result = SYSTEM::$excelfile->set_cell_format($filePath, $sheetNumber, $rowNumber2, $columnLetter, $customFormat, $isBuiltIn2);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
