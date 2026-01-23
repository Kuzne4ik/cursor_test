<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate reading sheet content
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Read sheet content
echo("\nExample 1: Read sheet content : \n\n");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
echo(SYSTEM::$excelfile->read_sheet($filePath, $sheetIndex));

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
