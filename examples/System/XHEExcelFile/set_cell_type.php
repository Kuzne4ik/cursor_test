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

// Example 1: Set column type (B)
echo("Example 1: Set column type (B) : ");
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

// Example 2: Get cell type (5 B)
echo("\nExample 2: Get cell type (5 B) : ");
// Extract method arguments into variables
$rowNumber = 5;
$cellType = SYSTEM::$excelfile->get_cell_type($filePath, $sheetNumber, $rowNumber, $columnLetter);
echo($cellType . "\n");

// Example 3: Set column type (B)
echo("\nExample 3: Set column type (B) : ");
// Extract method arguments into variables
$cellValue = "65.23";
SYSTEM::$excelfile->set_cell($filePath, $sheetNumber, $rowNumber, $columnLetter, $cellValue);
$cellType2 = "Text";
$result = SYSTEM::$excelfile->set_col_type($filePath, $sheetNumber, $columnLetter, $cellType2);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 4: Get cell type (5 B)
echo("\nExample 4: Get cell type (5 B) : ");
$cellType = SYSTEM::$excelfile->get_cell_type($filePath, $sheetNumber, $rowNumber, $columnLetter);
echo($cellType . "\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
