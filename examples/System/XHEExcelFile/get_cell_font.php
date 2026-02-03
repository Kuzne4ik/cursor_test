<?php
$xhe_host = "127.0.0.1:3035";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting font information from a specific cell in Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get font from a specific cell
echo("Example 1: Get font from a specific cell : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 2;
$columnLetter = "A";
print_r(SYSTEM::$excelfile->get_cell_font($filePath, $sheetIndex, $rowNumber, $columnLetter));

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
