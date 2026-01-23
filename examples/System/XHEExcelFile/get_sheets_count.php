<?php
$xhe_host = "127.0.0.1:7015";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting the number of sheets in Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get number of sheets
echo("Example 1: Get number of sheets : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
echo(SYSTEM::$excelfile->get_sheets_count($filePath) . "\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
