<?php 
// Scenario: Demonstrates how to get the content of a range as an array and then clear that range

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
$rowIndex = 1;
$rangeStart = "A1";
$rangeEnd = "H1";
$rowData = array('Завод "Э"', 2, 3, 4, 5, 6, 7, 8);

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Open Excel file
echo("\nExample 1: Open Excel file\n");
$result = SYSTEM::$excel->open($filePath, false, true);
if ($result) {
    echo("Successfully opened file $filePath\n");
} else {
    echo("Failed to open file $filePath\n");
}

// Example 2: Set row values
echo("\nExample 2: Set row values\n");
$result = SYSTEM::$excel->set_row($filePath, $sheetIndex, $rowIndex, $rowData);
if ($result) {
    echo("Successfully set values for row #$rowIndex\n");
} else {
    echo("Failed to set values for row #$rowIndex\n");
}

// Example 3: Get range content as array and clear it
echo("\nExample 3: Get range content as array and clear it\n");
$rangeData = SYSTEM::$excel->get_and_clear_range($filePath, $sheetIndex, $rangeStart, $rangeEnd);
if ($rangeData) {
    echo("Successfully got content of range $rangeStart:$rangeEnd and cleared it:\n");
    print_r($rangeData);
} else {
    echo("Failed to get and clear range $rangeStart:$rangeEnd\n");
}

// Example 4: Save the file
echo("\nExample 4: Save the file\n");
$result = SYSTEM::$excel->save($filePath);
if ($result) {
    echo("Successfully saved file $filePath\n");
} else {
    echo("Failed to save file $filePath\n");
}

// Wait for 3 seconds to observe the result
sleep(3);

// Example 5: Get range content (should be empty now)
echo("\nExample 5: Get range content (should be empty now)\n");
$rangeData = SYSTEM::$excel->get_range($filePath, $sheetIndex, $rangeStart, $rangeEnd);
if ($rangeData) {
    echo("Content of range $rangeStart:$rangeEnd after clearing:\n");
    print_r($rangeData);
} else {
    echo("Range $rangeStart:$rangeEnd is empty or could not be retrieved\n");
}

// Example 6: Close the file
echo("\nExample 6: Close the file\n");
$result = SYSTEM::$excel->close($filePath);
if ($result) {
    echo("Successfully closed file $filePath\n");
} else {
    echo("Failed to close file $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
