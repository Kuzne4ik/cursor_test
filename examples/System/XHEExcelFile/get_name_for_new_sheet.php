<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting new sheet names with various options
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get new sheet name with specified name
echo("Example 1: Get new sheet name with specified name : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetName = "new sheet";
echo(SYSTEM::$excelfile->get_name_for_new_sheet($filePath, $sheetName) . "\n");

// Example 2: Get new sheet name with number
echo("\nExample 2: Get new sheet name with number : ");
// Extract method arguments into variables
$sheetName2 = "guid";
echo(SYSTEM::$excelfile->get_name_for_new_sheet($filePath, $sheetName2) . "\n");

// Example 3: Get new sheet name with special character replacement
echo("\nExample 3: Get new sheet name with special character replacement : ");
// Extract method arguments into variables
$sheetName3 = "\\new [sheet] ?/";
echo(SYSTEM::$excelfile->get_name_for_new_sheet($filePath, $sheetName3) . "\n");

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
