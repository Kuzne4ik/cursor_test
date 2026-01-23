<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate splitting Excel sheet by rows into separate files
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Split sheet by rows into separate files
echo("\nExample 1: Split sheet by rows into separate files : ");
// Extract method arguments into variables
$excelFilePath = "test/test.xlsx";
$outputFolder = "sheets";
$sheetNumber = 0;
$rowsPerFile = 4;
$result = SYSTEM::$excelfile->split_sheet_by_rows($excelFilePath, $outputFolder, $sheetNumber, $rowsPerFile);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Quit the application
WINDOW::$app->quit();
?>
