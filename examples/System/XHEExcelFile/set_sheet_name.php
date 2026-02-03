<?php
$xhe_host = "127.0.0.1:7015";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting sheet name
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set sheet name
echo("Example 1: Set sheet name : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$newSheetName = "New Name";
$result = SYSTEM::$excelfile->set_sheet_name($filePath, $sheetNumber, $newSheetName);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Get sheet name
echo("\nExample 2: Get sheet name : ");
// Extract method arguments into variables
$sheetName = SYSTEM::$excelfile->get_sheet_name($filePath, $sheetNumber);
echo($sheetName . "\n");

// View the result


// End of script
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
