<?php
$xhe_host = "127.0.0.1:7039";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate clearing a specific range of cells in Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Clear a specific range of cells
echo("Example 1: Clear a specific range of cells : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$range = "E1:F5";
$result = SYSTEM::$excelfile->clear_range($filePath, $sheetIndex, $range);
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
