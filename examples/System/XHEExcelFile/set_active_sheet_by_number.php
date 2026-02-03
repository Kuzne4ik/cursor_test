<?php
$xhe_host = "127.0.0.1:7015";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting active sheet by number
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set active sheet by number
echo("Example 1: Set active sheet by number : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 3;
$result = SYSTEM::$excelfile->set_active_sheet_by_number($filePath, $sheetNumber);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Get active sheet number
echo("\nExample 2: Get active sheet number : ");
$activeSheetNumber = SYSTEM::$excelfile->get_active_sheet_number($filePath);
echo($activeSheetNumber . "\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
