<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate removing duplicates from a specific range in Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Remove duplicates from a specific range
echo("Example 1: Remove duplicates from a specific range : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 5;
$range = "B1:D20";
$columnLetter = "B";
$result = SYSTEM::$excelfile->dedupe_range($filePath, $sheetIndex, $range, $columnLetter);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
