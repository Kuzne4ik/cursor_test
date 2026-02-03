<?php
// Scenario: Add annotation to a cell by position in LibreOffice Calc spreadsheet

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >libreOfficeCalc->" . basename (__FILE__) . "</span>\n";

// Example 1
echo("1. Add annotation to cell C2[2, 3]: \n");
$filePath = "test/test.ods";
$sheetIndex = 0;
$cellPosition = "C2";
$author = "Author";
$comment = "Comment 1";
$annotationSettings = '{"x": "2cm", "y": "4cm"}';

$res1 = SYSTEM::$libreOfficeCalc->cell_add_annotation_by_position($filePath, $sheetIndex, $cellPosition, $author, $comment, $annotationSettings);
$res1 = $res1 ? 'true' : 'false';
echo("Annotation added: $res1\n");



// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>