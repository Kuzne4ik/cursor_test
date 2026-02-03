<?php 
// Scenario: Demonstrates how to open an Excel file, read its content, and close it

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
$visible = false;
$sheetIndex = 0;

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
$result2 = SYSTEM::$excel->open($filePath, $visible);
if ($result2) {
    echo("Successfully opened Excel file: $filePath\n");
} else {
    echo("Failed to open Excel file: $filePath\n");
}

// Example 3: Get the number of rows and columns
echo("\nExample 3: Get the number of rows and columns\n");
$rowsCount = SYSTEM::$excel->get_rows_count($filePath, $sheetIndex);
$colsCount = SYSTEM::$excel->get_cols_count($filePath, $sheetIndex);

echo("Number of rows: $rowsCount\n");
echo("Number of columns: $colsCount\n");

// Example 4: Display all cells in the sheet
echo("\nExample 4: Display all cells in the sheet\n");
for ($k = 1; $k <= $rowsCount; $k++) {
    for ($j = 1; $j <= $colsCount; $j++) {
        $cellValue = SYSTEM::$excel->get_cell($filePath, $sheetIndex, $k, $j);
        echo($cellValue . "|");
    }
    echo("\n");
}

// Example 5: Close the Excel file
echo("\nExample 5: Close the Excel file\n");
$result3 = SYSTEM::$excel->close($filePath);
if ($result3) {
    echo("Successfully closed Excel file: $filePath\n");
} else {
    echo("Failed to close Excel file: $filePath\n");
}

// Quit the application
WINDOW::$app->quit();
?>
