<?php
$xhe_host = "127.0.0.1:7020";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate checking if Excel file is opened
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Extract method arguments into variables
$filePath = "test/test.xlsx";

// Example 1: Open file
echo("Example 1: Open file : ");
$result = SYSTEM::$excelfile->open($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Check if file is opened
echo("\nExample 2: Check if file is opened : ");
$result = SYSTEM::$excelfile->is_opened($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 3: Close file
echo("\nExample 3: Close file : ");
$result = SYSTEM::$excelfile->close($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
