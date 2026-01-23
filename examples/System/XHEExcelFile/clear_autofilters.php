<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate clearing autofilters from Excel file
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel and prepare file path
$filePath = "test/test.xlsx";
SYSTEM::$excel->kill();

// Example 1: Clear autofilters from sheet
echo("Example 1: Clear autofilters from sheet : ");
// Extract method arguments into variables
$sheetIndex = 0;
$result = SYSTEM::$excelfile->clear_autofilters($filePath, $sheetIndex);
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
