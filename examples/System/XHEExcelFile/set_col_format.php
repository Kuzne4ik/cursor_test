<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting column format
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set column type
echo("Example 1: Set column type : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$columnLetter = "B";
$cellType = "Number";
$result = SYSTEM::$excelfile->set_col_type($filePath, $sheetNumber, $columnLetter, $cellType);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Set column format (built-in)
echo("\nExample 2: Set column format (built-in) : ");
// Extract method arguments into variables
$cellValue = "65.2311212";
SYSTEM::$excelfile->set_cell($filePath, $sheetNumber, 5, $columnLetter, $cellValue);
$formatIndex = 5;
$isBuiltIn = true;
$result = SYSTEM::$excelfile->set_col_format($filePath, $sheetNumber, $columnLetter, $formatIndex, $isBuiltIn);
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
