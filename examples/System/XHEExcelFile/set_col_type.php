<?php
$xhe_host = "127.0.0.1:7027";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting column type
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set column type
echo("Example 1: Set column type : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$columnLetter = "B";
$cellType = "DateTime";
$result = SYSTEM::$excelfile->set_col_type($filePath, $sheetNumber, $columnLetter, $cellType);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Get cell type
echo("\nExample 2: Get cell type : ");
// Extract method arguments into variables
$rowNumber = 5;
$cellType = SYSTEM::$excelfile->get_cell_type($filePath, $sheetNumber, $rowNumber, $columnLetter);
echo($cellType . "\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
