<?php
$xhe_host = "127.0.0.1:7026";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting row text color
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set row text color
echo("Example 1: Set row text color : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber = 11;
$textColor = "FF0000FF";
$result = SYSTEM::$excelfile->set_row_color($filePath, $sheetNumber, $rowNumber, $textColor);
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
