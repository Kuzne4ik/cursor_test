<?php
$xhe_host = "127.0.0.1:7022";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting the range of a merged cell in Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get the range of a merged cell
echo("Example 1: Get the range of a merged cell : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 6;
$columnLetter = "A";
echo((string)SYSTEM::$excelfile->get_merged_cell_range($filePath, $sheetIndex, $rowNumber, $columnLetter) . "\n");

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
