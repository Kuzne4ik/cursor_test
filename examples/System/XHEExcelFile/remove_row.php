<?php $xhe_host = "127.0.0.1:7024";

// Connect functional objects if not already connected
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// Scenario: Demonstrate removing row from Excel sheet
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Remove row 7
echo("Example 1: Remove row 7 : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber = 7;
$result = SYSTEM::$excelfile->remove_row($filePath, $sheetNumber, $rowNumber);
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
