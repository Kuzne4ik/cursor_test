<?php 
// Scenario: Demonstrates how to export Excel sheets to separate files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Export sheets to separate files
echo("\nExample 1: Export sheets to separate files\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$outputFolder = "sheets";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Export sheets to separate files
$result = SYSTEM::$excel->export_sheets($filePath, $outputFolder);
if ($result) {
    echo("Successfully exported sheets from $filePath to folder $outputFolder\n");
} else {
    echo("Failed to export sheets from $filePath to folder $outputFolder\n");
}

// Quit the application
WINDOW::$app->quit();
?>
