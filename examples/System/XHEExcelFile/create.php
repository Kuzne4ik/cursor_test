<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate creating a new Excel file with headers
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Create a new Excel file with headers
echo("Example 1: Create a new Excel file with headers : ");
// Extract method arguments into variables
$filePath = "test/test_create.xlsx";
$sheetName = "Sheet 1";
$headers = array("header 1", "header 2", "header 3");
$asTable = true;
$result = SYSTEM::$excelfile->create($filePath, $sheetName, $headers, $asTable);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
