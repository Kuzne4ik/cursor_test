<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting and getting cell text color in Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set cell text color
echo("Example 1: Set cell text color : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 1;
$columnLetter = "A";
$color = "FF0000FF";
$result = SYSTEM::$excelfile->set_cell_color($filePath, $sheetIndex, $rowNumber, $columnLetter, $color);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Get cell text color
echo("\nExample 2: Get cell text color : ");
echo(SYSTEM::$excelfile->get_cell_color($filePath, $sheetIndex, $rowNumber, $columnLetter) . "\n");

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
