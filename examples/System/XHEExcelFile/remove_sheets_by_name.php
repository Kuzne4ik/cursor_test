<?php $xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// Scenario: Demonstrate removing sheets by name
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Add sheets
echo("Example 1: Add sheets : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetName1 = "new1";
$sheetName2 = "new2";
$result1 = SYSTEM::$excelfile->add_sheet($filePath, $sheetName1);
$result2 = SYSTEM::$excelfile->add_sheet($filePath, $sheetName2);
if ($result1 === true && $result2 === true)
    echo("true\n");
else
    echo("false\n");

// Example 2: Remove sheets by name
echo("\nExample 2: Remove sheets by name : ");
$sheetNames = array($sheetName1, $sheetName2);
$result = SYSTEM::$excelfile->remove_sheets_by_name($filePath, $sheetNames);
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