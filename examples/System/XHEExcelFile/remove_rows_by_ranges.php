<?php $xhe_host = "127.0.0.1:7020";

// Connect functional objects if not already connected
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// Scenario: Demonstrate removing rows by range string
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Remove rows 7-9
echo("Example 1: Remove rows 7-9 : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowRanges = "7-9";
$result = SYSTEM::$excelfile->remove_rows_by_ranges($filePath, $sheetNumber, $rowRanges);
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
