<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting text from different cells in Excel file using various cell reference formats
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Get cell text (1 A) using column letter
echo("Example 1: Get cell text (1 A) using column letter : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 1;
$columnLetter = "A";
echo(SYSTEM::$excelfile->get_cell($filePath, $sheetIndex, $rowNumber, $columnLetter) . "\n");

// Example 2: Get cell text (2 B) using column letter
echo("\nExample 2: Get cell text (2 B) using column letter : ");
// Extract method arguments into variables
$rowNumber2 = 2;
$columnLetter2 = "B";
echo(SYSTEM::$excelfile->get_cell($filePath, $sheetIndex, $rowNumber2, $columnLetter2) . "\n");

// Example 3: Get cell text (1 C) using column letter
echo("\nExample 3: Get cell text (1 C) using column letter : ");
// Extract method arguments into variables
$rowNumber3 = 1;
$columnLetter3 = "C";
echo(SYSTEM::$excelfile->get_cell($filePath, $sheetIndex, $rowNumber3, $columnLetter3) . "\n");

// Example 4: Get cell text (1 C) using column number
echo("\nExample 4: Get cell text (1 C) using column number : ");
// Extract method arguments into variables
$columnNumber = 3;
echo(SYSTEM::$excelfile->get_cell($filePath, $sheetIndex, $rowNumber3, $columnNumber) . "\n");

// Example 5: Get cell text (1 G=33) using column number
echo("\nExample 5: Get cell text (1 G=33) using column number : ");
// Extract method arguments into variables
$columnNumber2 = 33;
echo(SYSTEM::$excelfile->get_cell($filePath, $sheetIndex, $rowNumber, $columnNumber2) . "\n");

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
