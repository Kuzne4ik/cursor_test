<?php
$xhe_host = "127.0.0.1:7026";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting row border
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set row border color
echo("Example 1: Set row border color : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber = 11;
$borderColor = "FFFF0000";
$result = SYSTEM::$excelfile->set_row_border($filePath, $sheetNumber, $rowNumber, $borderColor);
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
