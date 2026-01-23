<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate adding cells to Excel file at different positions
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Add cell to specific row (8th row)
echo("Example 1: Add cell to 8th row : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 8;
$cellValue = "added new text 2022";
$result = SYSTEM::$excelfile->add_cell($filePath, $sheetIndex, $rowNumber, $cellValue);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Add cell to last row
echo("\nExample 2: Add cell to last row : ");
// Extract method arguments into variables
$lastRow = -1;
$lastCellValue = "last row new text 2022";
$result = SYSTEM::$excelfile->add_cell($filePath, $sheetIndex, $lastRow, $lastCellValue);
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