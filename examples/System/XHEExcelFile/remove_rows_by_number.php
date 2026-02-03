<?php $xhe_host = "127.0.0.1:7020";

// Connect functional objects if not already connected
if (!isset($path))
  $path = "../../../Templates/init.php";
require($path);

// Scenario: Demonstrate removing rows by number range
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Remove rows 7-9
echo("Example 1: Remove rows 7-9 : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$startRow = 7;
$rowCount = 3;
$result = SYSTEM::$excelfile->remove_rows_by_number($filePath, $sheetNumber, $startRow, $rowCount);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result


// End of script
echo "\n";

// Quit
WINDOW::$app->quit();
?>
