<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate copying sheets within Excel file with different naming options
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel and prepare file path
SYSTEM::$excel->kill();
$filePath = DIRECTORY_SEPARATOR . "test" . DIRECTORY_SEPARATOR . "test.xlsx";
$sourceSheetIndex = 0;

// Example 1: Copy first sheet to new sheet with specific name
echo("Example 1: Copy first sheet to new sheet with name 'New' : ");
// Extract method arguments into variables
$newSheetName1 = "New list";
$result = SYSTEM::$excelfile->copy_sheet($filePath, $sourceSheetIndex, $newSheetName1);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Copy first sheet to new sheet with empty name
echo("\nExample 2: Copy first sheet to new sheet with empty name : ");
// Extract method arguments into variables
$newSheetName2 = "";
$result = SYSTEM::$excelfile->copy_sheet($filePath, $sourceSheetIndex, $newSheetName2);
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
