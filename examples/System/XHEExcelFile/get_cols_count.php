<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting column count from Excel file with various options
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get column count in sheet 0
echo("Example 1: Get column count in sheet 0 : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
echo(SYSTEM::$excelfile->get_cols_count($filePath, $sheetIndex) . "\n");

// Example 2: Get column count in sheet 0 for specific row
echo("\nExample 2: Get column count in sheet 0 for specific row : ");
// Extract method arguments into variables
$specificRow = 10;
echo(SYSTEM::$excelfile->get_cols_count($filePath, $sheetIndex, $specificRow) . "\n");

// Example 3: Get non-empty column count in sheet 0
echo("\nExample 3: Get non-empty column count in sheet 0 : ");
// Extract method arguments into variables
$lastRow = -1;
$onlyNonEmpty = true;
echo(SYSTEM::$excelfile->get_cols_count($filePath, $sheetIndex, $lastRow, $onlyNonEmpty) . "\n");

// Example 4: Get non-empty column count in sheet 0 for specific row
echo("\nExample 4: Get non-empty column count in sheet 0 for specific row : ");
// Extract method arguments into variables
$specificRow2 = 1;
echo(SYSTEM::$excelfile->get_cols_count($filePath, $sheetIndex, $specificRow2, $onlyNonEmpty) . "\n");

// Example 5: Get column count in sheet 4
echo("\nExample 5: Get column count in sheet 4 : ");
// Extract method arguments into variables
$sheetIndex2 = 4;
echo(SYSTEM::$excelfile->get_cols_count($filePath, $sheetIndex2) . "\n");

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
