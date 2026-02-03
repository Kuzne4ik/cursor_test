<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting row height
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set row height
echo("Example 1: Set row height : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber = 1;
$rowHeight = 50;
$result = SYSTEM::$excelfile->set_row_height($filePath, $sheetNumber, $rowNumber, $rowHeight);
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
