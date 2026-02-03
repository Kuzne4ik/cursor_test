<?php 
// Scenario: Demonstrates how to get all cell positions containing specified text in an Excel file

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
$sheetIndex = 0;
$searchText1 = "new";
$searchText2 = "Aafsdas";
$searchText3 = "A?";
$column = "A";

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Open the Excel file
SYSTEM::$excel->open($filePath, false, true);

// Example 1: Get positions of cells with specified text
echo("\nExample 1: Get positions of cells with specified text\n");
$positions = SYSTEM::$excel->get_all_pos_by_text($filePath, $sheetIndex, $searchText1, false);
if ($positions) {
    echo("Found positions for text '$searchText1':\n");
    print_r($positions);
} else {
    echo("No positions found for text '$searchText1'\n");
}

// Example 2: Get positions of cells with non-existent text
echo("\nExample 2: Get positions of cells with non-existent text\n");
$positions = SYSTEM::$excel->get_all_pos_by_text($filePath, $sheetIndex, $searchText2, false);
if ($positions) {
    echo("Found positions for text '$searchText2':\n");
    print_r($positions);
} else {
    echo("No positions found for text '$searchText2'\n");
}

// Example 3: Get positions of cells with specified text in a specific column
echo("\nExample 3: Get positions of cells with specified text in a specific column\n");
$positions = SYSTEM::$excel->get_all_pos_by_text($filePath, $sheetIndex, $searchText3, false, false, $column);
if ($positions) {
    echo("Found positions for text '$searchText3' in column '$column':\n");
    print_r($positions);
} else {
    echo("No positions found for text '$searchText3' in column '$column'\n");
}

// Close the Excel file
SYSTEM::$excel->close($filePath);

// Quit the application
WINDOW::$app->quit();
?>
