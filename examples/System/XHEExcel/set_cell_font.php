<?php
// Scenario: Set font properties for a cell in an Excel file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// beginning
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// Example 1: Set cell font with multiple properties
SYSTEM::$excel->kill();
$filePath = "test/test.xlsx";
$sheetIndex = 0;
$row = 6;
$column = "A";

// Create font object with properties
$font = new XHEFont();
$font->name = "Arial";
$font->is_bold = true;
$font->is_italic = true;
$font->is_striketrough = true;
$font->is_underline = true;
$font->is_shadow = true;
$font->size = 20;

echo("1. Set font properties for cell at row $row, column $column: ");
$result = SYSTEM::$excel->set_cell_font($filePath, $sheetIndex, $row, $column, $font);
if ($result) {
    echo("Successfully set font properties for cell\n");
    echo("Font properties: Name=$font->name, Bold=$font->is_bold, Italic=$font->is_italic, ");
    echo("Striketrough=$font->is_striketrough, Underline=$font->is_underline, Shadow=$font->is_shadow, Size=$font->size\n");
} else {
    echo("Failed to set font properties for cell\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>

