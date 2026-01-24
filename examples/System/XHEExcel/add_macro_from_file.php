<?php 
// Scenario: Demonstrates how to run a macro by name from an Excel file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Run a macro with a specified name from an Excel file
echo("\nExample 1: Run a macro with a specified name from an Excel file\n");

// Set variables for method arguments
$filePath = "test/test.xlsm";
$sheetIndex = 0;
$macroName = "MacrosName";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Run macro by name
$result = SYSTEM::$excel->run_macro_by_name($filePath, $sheetIndex, $macroName);
if ($result) {
    echo("Macro executed successfully with name: $macroName\n");
} else {
    echo("Failed to execute macro with name: $macroName\n");
}

// Quit the application
WINDOW::$app->quit();
?>
