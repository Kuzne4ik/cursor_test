<?php $xhe_host = "127.0.0.1:7020";

// Connect functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// Scenario: Demonstrate removing sheet by number
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Add sheet
echo("Example 1: Add sheet : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetName = "new sheet1";
$result = SYSTEM::$excelfile->add_sheet($filePath, $sheetName);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Get number of sheets
echo("\nExample 2: Get number of sheets : ");
$sheetCount = SYSTEM::$excelfile->get_sheets_count($filePath);
echo($sheetCount . "\n");

// Example 3: Remove sheet by number
echo("\nExample 3: Remove sheet by number : ");
$result = SYSTEM::$excelfile->remove_sheet_by_number($filePath, $sheetCount);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// Example 4: Get number of sheets
echo("\nExample 4: Get number of sheets : ");
$sheetCount = SYSTEM::$excelfile->get_sheets_count($filePath);
echo($sheetCount . "\n");

// End of script
echo "\n";

// Quit
WINDOW::$app->quit();
?>
