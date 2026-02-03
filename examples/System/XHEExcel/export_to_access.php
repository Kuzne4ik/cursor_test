<?php 
// Scenario: Demonstrates how to export an Excel sheet to an Access database

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Export Excel sheet to Access database
echo("\nExample 1: Export Excel sheet to Access database\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$accessDbPath = "d:/Empty.accdb";
$sheetName = "Sheet1";
$tableName = "new_table";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Export Excel sheet to Access database
$result = SYSTEM::$excel->export_to_access($filePath, $accessDbPath, $sheetName, $tableName);
if ($result) {
    echo("Successfully exported sheet '$sheetName' from $filePath to table '$tableName' in $accessDbPath\n");
} else {
    echo("Failed to export sheet '$sheetName' from $filePath to table '$tableName' in $accessDbPath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
