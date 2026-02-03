<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate removing column from Excel sheet
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Remove column C
echo("Example 1: Remove column C : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$columnLetter = "C";
$result = SYSTEM::$excelfile->remove_col($filePath, $sheetNumber, $columnLetter);
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
