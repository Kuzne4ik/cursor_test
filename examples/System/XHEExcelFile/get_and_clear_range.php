<?php
$xhe_host = "127.0.0.1:7011";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate getting and clearing a range of cells in Excel file
echo "\n<span >excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel and prepare file path
$filePath = "test/test.xlsx";
SYSTEM::$excel->kill();

// Example 1: Create values for a row
echo("\nExample 1: Create values for a row : ");
// Extract method arguments into variables
$sheetIndex = 1;
$rowNumber = 1;
$rowData = array('Завод "Э"', 2, 3, 4, 5, 6, 7, 8);
$result = SYSTEM::$excelfile->set_row($filePath, $sheetIndex, $rowNumber, $rowData);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Get range contents as array and clear it
echo("\nExample 2: Get range contents as array and clear it : ");
// Extract method arguments into variables
$range = "A1:H1";
print_r(SYSTEM::$excelfile->get_and_clear_range($filePath, $sheetIndex, $range));

// Example 3: Get range contents (should be empty)
echo("\nExample 3: Get range contents (should be empty) : ");
print_r(SYSTEM::$excelfile->get_range($filePath, $sheetIndex, $range));

// Example 4: Close file
echo("\nExample 4: Close file : ");
$result = SYSTEM::$excelfile->close($filePath);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
