<?php $xhe_host = "127.0.0.1:7020";

// Connect functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// Scenario: Demonstrate removing rows by text content
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Remove row containing '1' in column A
echo("Example 1: Remove row containing '1' in column A : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$text = "1";
$columnLetter = "A";
$result = SYSTEM::$excelfile->remove_rows_by_text($filePath, $sheetNumber, $text, $columnLetter);
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
