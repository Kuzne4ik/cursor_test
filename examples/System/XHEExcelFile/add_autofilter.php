<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate adding autofilter to Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel and prepare file path
$filePath = "test/test.xlsx";
SYSTEM::$excel->kill();

// Example 1: Add autofilter to specific range
echo("Example 1: Add autofilter to range A1:B200 : ");
// Extract method arguments into variables
$sheetIndex = 0;
$range = "A1:B200";
$columnIndex = 1;
$operator = "EqualTo";
$criteria = "1";
$result = SYSTEM::$excelfile->add_autofilter($filePath, $sheetIndex, $range, $columnIndex, $operator, $criteria);
if ($result === true)
    echo("true\n");
else
    echo("false\n");



// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>