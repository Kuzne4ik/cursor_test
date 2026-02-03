<?php
$xhe_host = "127.0.0.1:7015";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting sheet names by index
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get sheet name at index 0
echo("Example 1: Get sheet name at index 0 : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex1 = 0;
echo(SYSTEM::$excelfile->get_sheet_name($filePath, $sheetIndex1) . "\n");

// Example 2: Get sheet name at index 1
echo("\nExample 2: Get sheet name at index 1 : ");
// Extract method arguments into variables
$sheetIndex2 = 1;
echo(SYSTEM::$excelfile->get_sheet_name($filePath, $sheetIndex2) . "\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
