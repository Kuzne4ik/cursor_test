<?php 
// Scenario: Demonstrates how to refresh data in an Excel sheet after changes in an external data source

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Set variables for method arguments
$filePath = "D:/1.xlsx";
$visible = false;
$debug = true;
$sheetIndex = 1;

// Example 1: Kill any existing Excel processes
echo("\nExample 1: Kill any existing Excel processes\n");
$result1 = SYSTEM::$excel->kill();
if ($result1) {
    echo("Successfully killed existing Excel processes\n");
} else {
    echo("Failed to kill existing Excel processes\n");
}

// Example 2: Open the Excel file
echo("\nExample 2: Open the Excel file\n");
$result2 = SYSTEM::$excel->open($filePath, $visible, $debug);
if ($result2) {
    echo("Successfully opened Excel file: $filePath\n");
} else {
    echo("Failed to open Excel file: $filePath\n");
}

// Example 3: Refresh the sheet data after changes in the external data source
echo("\nExample 3: Refresh the sheet data after changes in the external data source\n");
$result3 = SYSTEM::$excel->refresh_sheet($filePath, $sheetIndex);
if ($result3) {
    echo("Successfully refreshed data in sheet #$sheetIndex\n");
} else {
    echo("Failed to refresh data in sheet #$sheetIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>
