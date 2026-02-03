<?php
// Scenario: Open an Excel file, display its content, save it, and close it
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Example 1: Open Excel file
SYSTEM::$excel->kill();
$filePath = "test/test.xlsx";

echo("\n1. Open Excel file: ");
$result = SYSTEM::$excel->open($filePath, true);
if ($result) {
    echo("Successfully opened file '$filePath'\n");
} else {
    echo("Failed to open file '$filePath'\n");
}

// Get rows and columns count
$rowsCount = SYSTEM::$excel->get_rows_count($filePath, 0);
$colsCount = SYSTEM::$excel->get_cols_count($filePath, 0);
echo("Rows count: $rowsCount, Columns count: $colsCount\n");

// Example 2: Display all cells
echo("\n2. Display all cells in the file:\n");
for ($k = 1; $k <= $rowsCount; $k++) {
    for ($j = 1; $j <= $colsCount; $j++) {
        $cellValue = SYSTEM::$excel->get_cell($filePath, 0, $k, $j);
        echo($cellValue . "|");
    }
    echo("\n");
}

// Example 3: Save the file
echo("\n3. Save the file: ");
$result = SYSTEM::$excel->save($filePath);
if ($result) {
    echo("Successfully saved file '$filePath'\n");
} else {
    echo("Failed to save file '$filePath'\n");
}

// Example 4: Close the file
echo("\n4. Close the file: ");
$result = SYSTEM::$excel->close($filePath);
if ($result) {
    echo("Successfully closed file '$filePath'\n");
} else {
    echo("Failed to close file '$filePath'\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

