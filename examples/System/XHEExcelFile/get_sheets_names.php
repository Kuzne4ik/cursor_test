<?php
$xhe_host = "127.0.0.1:7027";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting all sheet names
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get all sheet names
echo("Example 1: Get all sheet names : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
print_r(SYSTEM::$excelfile->get_sheets_names($filePath, $sheetIndex));

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
