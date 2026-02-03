<?php
// Scenario: Add a sheet, get sheets count, remove the last sheet by number, and verify removal
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Example 1: Add a sheet
SYSTEM::$excel->kill();
$filePath = "test/test.xlsx";
$sheetName = "new sheet1";

echo("1. Add sheet with name '$sheetName': ");
$result = SYSTEM::$excel->add_sheet($filePath, $sheetName);
if ($result) {
    echo("Successfully added sheet '$sheetName'\n");
} else {
    echo("Failed to add sheet '$sheetName'\n");
}

// Example 2: Get sheets count
echo("\n2. Get sheets count: ");
$sheetsCount = SYSTEM::$excel->get_sheets_count($filePath);
echo("Total sheets count: $sheetsCount\n");

// Example 3: Remove sheet by number (last sheet)
echo("\n3. Remove last sheet by number ($sheetsCount-1): ");
$result = SYSTEM::$excel->remove_sheet_by_number($filePath, $sheetsCount-1);
if ($result) {
    echo("Successfully removed sheet number ".($sheetsCount-1)."\n");
} else {
    echo("Failed to remove sheet number ".($sheetsCount-1)."\n");
}

// Example 4: Verify sheet removal by getting sheets count again
echo("\n4. Verify sheet removal by getting sheets count again: ");
$newSheetsCount = SYSTEM::$excel->get_sheets_count($filePath);
if ($newSheetsCount < $sheetsCount) {
    echo("Sheet successfully removed. New sheets count: $newSheetsCount\n");
} else {
    echo("Sheet removal failed. Sheets count remains: $newSheetsCount\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

