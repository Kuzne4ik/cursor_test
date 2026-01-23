<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate adding a column to Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Add column with data
echo("Example 1: Add column with data : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 3;
$columnData = array(1, 2, 3);
$result = SYSTEM::$excelfile->add_col($filePath, $sheetIndex, $columnData);
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