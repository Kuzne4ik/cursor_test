<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting sheet content as array
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get sheet content as array
echo("\nExample 1: Get sheet content as array: ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
print_r(SYSTEM::$excelfile->get_sheet($filePath, $sheetIndex));

// View the result


// Quit
WINDOW::$app->quit();
?>
