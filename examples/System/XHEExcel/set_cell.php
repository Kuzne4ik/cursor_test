<?php
// Scenario: Get cell content, set cell content with values and formulas, and save the file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Open Excel file
SYSTEM::$excel->kill();
$filePath = "test/test.xlsx";
$sheetIndex = 0;
SYSTEM::$excel->open($filePath, false, true);

// Example 1: Get cell content
$row = 1;
$col = 3;

echo("\n1. Get content of cell at row $row, column $col: ");
$cellContent = SYSTEM::$excel->get_cell($filePath, $sheetIndex, $row, $col);
echo("Cell content: " . $cellContent . "\n");

// Example 2: Set cell content with a value
$row = 1;
$col = 3;
$value = "new";

echo("\n2. Set content of cell at row $row, column $col to value '$value': ");
$result = SYSTEM::$excel->set_cell($filePath, $sheetIndex, $row, $col, $value);
if ($result) {
    echo("Successfully set cell content to '$value'\n");
} else {
    echo("Failed to set cell content to '$value'\n");
}

// Example 3: Set another cell content with a value
$row = 1;
$col = 4;
$value = "new 2";

echo("\n3. Set content of cell at row $row, column $col to value '$value': ");
$result = SYSTEM::$excel->set_cell($filePath, $sheetIndex, $row, $col, $value);
if ($result) {
    echo("Successfully set cell content to '$value'\n");
} else {
    echo("Failed to set cell content to '$value'\n");
}

// Example 4: Set cell content with a formula
$row = 4;
$col = "F";
$formula = "=SUM(F1:F3)";

echo("\n4. Set content of cell at row $row, column $col to formula '$formula': ");
$result = SYSTEM::$excel->set_cell($filePath, $sheetIndex, $row, $col, $formula);
if ($result) {
    echo("Successfully set cell content to formula '$formula'\n");
} else {
    echo("Failed to set cell content to formula '$formula'\n");
}

// Example 5: Set another cell content with a value
$row = 3;
$col = "F";
$value = "029";

echo("\n5. Set content of cell at row $row, column $col to value '$value': ");
$result = SYSTEM::$excel->set_cell($filePath, $sheetIndex, $row, $col, $value);
if ($result) {
    echo("Successfully set cell content to '$value'\n");
} else {
    echo("Failed to set cell content to '$value'\n");
}

// Save and close the file
SYSTEM::$excel->save($filePath);
SYSTEM::$excel->close($filePath);

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

