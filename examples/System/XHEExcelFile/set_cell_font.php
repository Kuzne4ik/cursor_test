<?php
$xhe_host = "127.0.0.1:7011";

// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Demonstrate setting cell font
echo "\n<span style=\"color: blue; \">excelfile->" . basename(__FILE__) . "</span>\n";

// Initialize Excel
SYSTEM::$excel->kill();

// Example 1: Set cell font
echo("Example 1: Set cell font : ");
// Extract method arguments into variables
$filePath = "test/test.xlsx";
$sheetNumber = 0;
$rowNumber = 2;
$columnLetter = "A";

// Create font object
$font = new XHEFont();
$font->name = "Arial";
$font->is_bold = true;
$font->is_italic = true;
$font->size = 20;

echo($font . " => ");
$result = SYSTEM::$excelfile->set_cell_font($filePath, $sheetNumber, $rowNumber, $columnLetter, $font);
if ($result === true)
    echo("true\n");
else
    echo("false\n");

// View the result


// End of script
echo "\n";

// Quit application
WINDOW::$app->quit();
?>
