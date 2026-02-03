<?php 
// Scenario: Demonstrates how to kill Excel processes and verify they are terminated

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Set variables for method arguments
$filePath = "test/test.xlsx";
$operation = "open";

// Example 1: Kill any existing Excel processes
echo("\nExample 1: Kill any existing Excel processes\n");
$result1 = SYSTEM::$excel->kill();
if ($result1) {
    echo("Successfully killed existing Excel processes\n");
} else {
    echo("Failed to kill existing Excel processes\n");
}

// Example 2: Open an Excel file using shell execute
echo("\nExample 2: Open an Excel file using shell execute\n");
$result2 = WINDOW::$app->shell_execute($operation, $filePath);
if ($result2) {
    echo("Successfully opened Excel file: $filePath\n");
} else {
    echo("Failed to open Excel file: $filePath\n");
}

// Example 3: Kill Excel processes again
echo("\nExample 3: Kill Excel processes again\n");
$result3 = SYSTEM::$excel->kill();
if ($result3) {
    echo("Successfully killed Excel processes\n");
} else {
    echo("Failed to kill Excel processes\n");
}

// Quit the application
WINDOW::$app->quit();
?>
