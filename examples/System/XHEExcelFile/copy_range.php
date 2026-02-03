<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate copying a range of cells to another location in Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Copy a range of cells to another location
echo("Example 1: Copy a range of cells : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$range = "A1:G10";
$targetSheet = 4;
$targetRow = 10;
$targetColumn = 10;
$result = SYSTEM::$excelfile->copy_range($filePath, $sheetIndex, $range, $targetSheet, $targetRow, $targetColumn);
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
