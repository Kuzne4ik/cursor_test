<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate removing duplicates from Excel sheet by columns and with header consideration
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Remove duplicates from sheet by specific columns
echo("Example 1: Remove duplicates from sheet by specific columns : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$columns = "C,D";
$result = SYSTEM::$excelfile->dedupe_sheet($filePath, $sheetIndex, $columns);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Remove duplicates from sheet by all columns with header consideration
echo("\nExample 2: Remove duplicates from sheet by all columns with header consideration : ");
// Extract method arguments into variables
$allColumns = "*";
$withHeader = true;
$result = SYSTEM::$excelfile->dedupe_sheet($filePath, $sheetIndex, $allColumns, $withHeader);
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
