<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate sorting Excel sheets by columns
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Sort sheet by columns in descending order
echo("\nExample 1: Sort sheet by columns in descending order : ");
// Extract method arguments into variables
$excelFilePath = "test/test.xlsx";
$sheetNumber = 0;
$columns = "C,D";
$sortAscending = false;
$result = SYSTEM::$excelfile->sort_sheet($excelFilePath, $sheetNumber, $columns, $sortAscending);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result
WINDOW::$app->shell_execute("open", $excelFilePath);

// End of script
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
