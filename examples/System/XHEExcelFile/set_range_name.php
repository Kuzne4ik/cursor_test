<?php
$xhe_host = "127.0.0.1:7027";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting range name
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set range name
echo("Example 1: Set range name : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$range = "E1:F5";
$rangeName = "__Name__";
$result = SYSTEM::$excelfile->set_range_name($filePath, $sheetNumber, $range, $rangeName);
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
