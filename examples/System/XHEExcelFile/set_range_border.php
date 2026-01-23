<?php
$xhe_host = "127.0.0.1:7021";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting range border
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set range border
echo("\nExample 1: Set range border : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$range = "E1:E5";
$borderColor = "FFFF00FF";
$result = SYSTEM::$excelfile->set_range_border($filePath, $sheetNumber, $range, $borderColor);
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
