<?php
// Scenario: Insert an image into a specific page of a PDF file at specified coordinates

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Example 1: Insert an image into a PDF file
// Input data
$filePath = "test/test.pdf";
$pageNumber = 0;
$imagePath = "test/test.bmp";
$xCoordinate = 5;
$yCoordinate = 700;

echo("\n\nExample 1. Insert an image into a PDF file: ");
$insertResult = SYSTEM::$pdffile->insert_image($filePath, $pageNumber, $imagePath, $xCoordinate, $yCoordinate);

if ($insertResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Show results
echo("\n\nShow results: open PDF file with inserted image\n");
WINDOW::$app->shell_execute("", $filePath);

// Quit the application
WINDOW::$app->quit();
?>