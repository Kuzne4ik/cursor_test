<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting range format
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set range format (built-in)
echo("\nExample 1: Set range format (built-in) : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$range = "E1:E5";
$formatIndex = 5;
$isBuiltIn = true;
$result = SYSTEM::$excelfile->set_range_format($filePath, $sheetNumber, $range, $formatIndex, $isBuiltIn);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result


// End of script
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
