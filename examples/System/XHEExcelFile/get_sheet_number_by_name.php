<?php
$xhe_host = "127.0.0.1:7015";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting sheet number by name
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get sheet number by name "Лист2"
echo("Example 1: Get sheet number by name 'Лист2' : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetName1 = "Лист2";
echo(SYSTEM::$excelfile->get_sheet_number_by_name($filePath, $sheetName1) . "\n");

// Example 2: Get sheet number by name "Лист1"
echo("\nExample 2: Get sheet number by name 'Лист1' : ");
// Extract method arguments into variables
$sheetName2 = "Лист1";
echo(SYSTEM::$excelfile->get_sheet_number_by_name($filePath, $sheetName2) . "\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
