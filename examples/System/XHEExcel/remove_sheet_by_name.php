<?php
// Scenario: Add a sheet, get its number by name, remove it by name, and verify removal
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
$sheetName = "new sheet2";

echo("1. Add sheet with name '$sheetName': ");
$result = SYSTEM::$excel->add_sheet($filePath, $sheetName);
if ($result) {
    echo("Successfully added sheet '$sheetName'\n");
} else {
    echo("Failed to add sheet '$sheetName'\n");
}

// Example 2: Get sheet number by name
echo("\n2. Get sheet number by name '$sheetName': ");
$sheetNumber = SYSTEM::$excel->get_sheet_number_by_name($filePath, $sheetName);
if ($sheetNumber > -1) {
    echo("Sheet '$sheetName' has number: $sheetNumber\n");
} else {
    echo("Sheet '$sheetName' not found\n");
}

// Example 3: Remove sheet by name
echo("\n3. Remove sheet by name '$sheetName': ");
$result = SYSTEM::$excel->remove_sheet_by_name($filePath, $sheetName);
if ($result) {
    echo("Successfully removed sheet '$sheetName'\n");
} else {
    echo("Failed to remove sheet '$sheetName'\n");
}

// Example 4: Verify sheet removal
echo("\n4. Verify sheet removal by checking sheet number: ");
$sheetNumber = SYSTEM::$excel->get_sheet_number_by_name($filePath, $sheetName);
if ($sheetNumber > -1) {
    echo("Sheet '$sheetName' still exists with number: $sheetNumber\n");
} else {
    echo("Sheet '$sheetName' has been successfully removed\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

