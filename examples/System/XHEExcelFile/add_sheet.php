<?php $xhe_host = "127.0.0.1:7010";

// Connect functional objects
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// Scenario: Demonstrate adding a sheet to Excel file and getting sheet count
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Add a new sheet
echo("Example 1: Add a new sheet : ");
// Extract method arguments into variables
$filePath = "test\\test.xlsx";
$sheetName = "new sheet3";
echo(SYSTEM::$excelfile->add_sheet($filePath, $sheetName));

// Example 2: Get the number of sheets
echo("\nExample 2: Get the number of sheets : ");
// Extract method arguments into variables
$sheetCount = SYSTEM::$excelfile->get_sheets_count($filePath);
echo($sheetCount);

// View the result
//$app->shell_execute("open", $filePath);

// End of script
echo "\n";

// Quit
WINDOW::$app->quit();
?>