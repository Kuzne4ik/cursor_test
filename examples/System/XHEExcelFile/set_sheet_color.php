<?php
$xhe_host = "127.0.0.1:3039";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting sheet color
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set sheet color
echo("Example 1: Set sheet color : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$sheetColor = "080808";
$result = SYSTEM::$excelfile->set_sheet_color($filePath, $sheetNumber, $sheetColor);
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
