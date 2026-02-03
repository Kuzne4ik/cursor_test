<?php 
// Scenario: Demonstrates how to create a new Excel file with headers

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Create a new Excel file with headers
echo("\nExample 1: Create a new Excel file with headers\n");

// Set variables for method arguments
$filePath = "test/test_create.xlsx";
$sheetName = "Sheet 1";
$headers = array("header 1", "header 2", "header 3");

// Create a new Excel file with headers
$result = SYSTEM::$excel->create($filePath, $sheetName, $headers);
if ($result) {
    echo("Successfully created new Excel file with headers: $filePath\n");
} else {
    echo("Failed to create new Excel file with headers: $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
