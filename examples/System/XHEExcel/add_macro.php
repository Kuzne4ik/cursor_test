<?php 
// Scenario: Demonstrates how to add a macro to an Excel file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Add a macro with a specified name to an Excel file
echo("\nExample 1: Add a macro with a specified name to an Excel file\n");

// Set variables for method arguments
$filePath = "test/test.xlsm";
$sheetIndex = 0;
$macroName = "test";
$macroCode = "MsgBox \"test\"";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Add macro to Excel file
$result = SYSTEM::$excel->add_macro($filePath, $sheetIndex, $macroName, $macroCode);
if ($result) {
    echo("Macro added successfully with name: $macroName\n");
} else {
    echo("Failed to add macro with name: $macroName\n");
}

// Quit the application
WINDOW::$app->quit();
?>
