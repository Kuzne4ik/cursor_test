<?php
$xhe_host = "127.0.0.1:7011";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting range contents as arrays from Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel and prepare file path
$filePath = "test/test.xlsx";
SYSTEM::$excel->kill();

// Example 1: Get range contents as array '0!A1:C3'
echo("Example 1: Get range contents as array '0!A1:C3' : ");
// Extract method arguments into variables
$sheetIndex = 0;
$range1 = "A1:C3";
print_r(SYSTEM::$excelfile->get_range($filePath, $sheetIndex, $range1));

// Example 2: Get range contents as array '0!A1:A10'
echo("\nExample 2: Get range contents as array '0!A1:A10' : ");
// Extract method arguments into variables
$range2 = "A1:A10";
print_r(SYSTEM::$excelfile->get_range($filePath, $sheetIndex, $range2));

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
