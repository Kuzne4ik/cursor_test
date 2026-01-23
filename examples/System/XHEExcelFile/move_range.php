<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate moving cell ranges in Excel sheet
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Move cell range
echo("Example 1: Move cell range: ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$range = "A1:G10";
$rowOffset = 4;
$colOffset = 1;
$copyMode = 1;
$result = SYSTEM::$excelfile->move_range($filePath, $sheetNumber, $range, $rowOffset, $colOffset, $copyMode);
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
