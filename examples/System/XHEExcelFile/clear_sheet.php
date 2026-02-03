<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate clearing a specific sheet in Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Clear a specific sheet
echo("Example 1: Clear a specific sheet 1 : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 1;
$result = SYSTEM::$excelfile->clear_sheet($filePath, $sheetIndex);
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
