<?php
$xhe_host = "127.0.0.1:7012";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting cell border
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set cell border color
echo("Example 1: Set cell border color : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber = 1;
$columnLetter = "A";
$borderColor = "FFFF0000";
$result = SYSTEM::$excelfile->set_cell_border($filePath, $sheetNumber, $rowNumber, $columnLetter, $borderColor);
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
