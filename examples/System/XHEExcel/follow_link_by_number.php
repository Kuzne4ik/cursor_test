<?php 
// Scenario: Demonstrates how to follow a hyperlink in an Excel file by its number

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Follow hyperlink by number
echo("\nExample 1: Follow hyperlink by number\n");

// Set variables for method arguments
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$linkNumber = 0;

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Follow hyperlink by number
$result = SYSTEM::$excel->follow_link_by_number($filePath, $sheetIndex, $linkNumber);
if ($result) {
    echo("Successfully followed hyperlink #$linkNumber in sheet #$sheetIndex of file $filePath\n");
} else {
    echo("Failed to follow hyperlink #$linkNumber in sheet #$sheetIndex of file $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
