<?php
// Scenario: Set a new source data file for an Excel connection
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Set arguments as variables
$filePath = "test/test.xlsx";
$visibility = false;
$readOnly = true;

// Kill existing Excel processes
SYSTEM::$excel->kill();

// Open Excel file
echo("\nOpen Excel file: $filePath\n");
SYSTEM::$excel->open($filePath, $visibility, $readOnly);

// Wait for 3 seconds
sleep(3);

// Example 1: Set a new source data file for a connection
// Set arguments as variables
$sheetIndex = 0;
$newSourceFile = "test/test_connection_replace.xlsx";

echo("\n\n1. Set a new source data file for connection: ");
$result = SYSTEM::$excel->set_connection_source_data_file_by_number($filePath, $sheetIndex, $newSourceFile);
if ($result) {
    echo("Success - Connection source data file changed to '$newSourceFile'\n");
} else {
    echo("Failed - Could not change connection source data file to '$newSourceFile'\n");
}

// Wait for 5 seconds
sleep(5);

// Close Excel file
echo("\nClose Excel file: $filePath\n");
SYSTEM::$excel->close($filePath);

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

