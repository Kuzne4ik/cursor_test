<?php
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate extracting images from Excel file to specified directory
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Extract images from Excel file to specified directory
echo("Example 1: Extract images from Excel file : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$targetDirectory = "test/images";
$result = SYSTEM::$excelfile->extract_images($filePath, $targetDirectory);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
