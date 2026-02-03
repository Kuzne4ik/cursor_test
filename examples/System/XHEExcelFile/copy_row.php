<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate copying a row from one Excel file to another
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Create a copy of the test file
$sourceFile = "test/test_copy.xlsx";
$targetFile = "test/test.xlsx";
SYSTEM::$file_os->copy($targetFile, $sourceFile);

// Example 1: Copy a row from source file to target file
echo("Example 1: Copy a row from source to target : ");
// Extract method arguments into variables
$sourceSheetIndex = 0;
$sourceRowNumber = 1;
$targetSheetIndex = 0;
$targetRowNumber = 20;
$result = SYSTEM::$excelfile->copy_row($sourceFile, $sourceSheetIndex, $sourceRowNumber, $targetFile, $targetSheetIndex, $targetRowNumber);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View result
WINDOW::$app->shell_execute("open", $targetFile);

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
