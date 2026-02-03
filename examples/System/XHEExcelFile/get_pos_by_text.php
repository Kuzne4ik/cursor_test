<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting cell position by text search in Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get cell position with specified text
echo("Example 1: Get cell position with specified text : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$searchText = "new";
$caseSensitive = false;
print_r(SYSTEM::$excelfile->get_pos_by_text($filePath, $sheetIndex, $searchText, $caseSensitive));

// Example 2: Get cell position with specified text in specific column
echo("\nExample 2: Get cell position with specified text in specific column : ");
// Extract method arguments into variables
$columnLetter = "D";
print_r(SYSTEM::$excelfile->get_pos_by_text($filePath, $sheetIndex, $searchText, $caseSensitive, $columnLetter));

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
