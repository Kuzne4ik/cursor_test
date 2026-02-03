<?php
// Scenario: Show or hide rows in an Excel sheet
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<span >excelfile->".basename (__FILE__)."</span>\n";

// Kill existing Excel processes
SYSTEM::$excel->kill();

// Set arguments as variables
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$rowNumber = 1;

// Example 1: Check if row is hidden
echo("\n\n1. Check if row is hidden: ");
$isHidden = SYSTEM::$excel->is_row_hidden($filePath, $sheetIndex, $rowNumber);
if ($isHidden) {
    echo("Row $rowNumber is hidden\n");
} else {
    echo("Row $rowNumber is visible\n");
}

// Example 2: Hide the row
echo("\n2. Hide the row: ");
$result = SYSTEM::$excel->show_row($filePath, $sheetIndex, $rowNumber, false);
if ($result) {
    echo("Success - Row $rowNumber is now hidden\n");
} else {
    echo("Failed - Could not hide row $rowNumber\n");
}

// Example 3: Check again if row is hidden
echo("\n3. Check again if row is hidden: ");
$isHidden = SYSTEM::$excel->is_row_hidden($filePath, $sheetIndex, $rowNumber);
if ($isHidden) {
    echo("Row $rowNumber is hidden\n");
} else {
    echo("Row $rowNumber is visible\n");
}

// Example 4: Show the row
echo("\n4. Show the row: ");
$result = SYSTEM::$excel->show_row($filePath, $sheetIndex, $rowNumber, true);
if ($result) {
    echo("Success - Row $rowNumber is now visible\n");
} else {
    echo("Failed - Could not show row $rowNumber\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

