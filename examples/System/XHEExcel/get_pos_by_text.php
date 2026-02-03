<?php 
// Scenario: Demonstrates how to find the position of a cell containing specific text in an Excel sheet

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
$sheetIndex = 1;
$searchText1 = "1";
$searchText2 = "1";
$specificColumn = "D";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Open the Excel file
SYSTEM::$excel->open($filePath, false, true);

// Example 1: Get position of cell with specific text
echo("\nExample 1: Get position of cell with specific text\n");
$position1 = SYSTEM::$excel->get_pos_by_text($filePath, $sheetIndex, $searchText1, false);
if ($position1 !== null) {
    echo("Found text '$searchText1' at position: ");
    print_r($position1);
} else {
    echo("Text '$searchText1' not found in sheet #$sheetIndex\n");
}

// Example 2: Get position of cell with specific text in a specific column
echo("\nExample 2: Get position of cell with specific text in a specific column\n");
$position2 = SYSTEM::$excel->get_pos_by_text($filePath, $sheetIndex, $searchText2, false, false, $specificColumn);
if ($position2 !== null) {
    echo("Found text '$searchText2' in column $specificColumn at position: ");
    print_r($position2);
} else {
    echo("Text '$searchText2' not found in column $specificColumn of sheet #$sheetIndex\n");
}

// Close the Excel file
SYSTEM::$excel->close($filePath);

// Quit the application
WINDOW::$app->quit();
?>
