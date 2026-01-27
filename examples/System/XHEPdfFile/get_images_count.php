<?php
// Scenario: Get the count of images in a PDF file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Example 1: Get the count of images in PDF file
// Input data
$filePath = "test/test.pdf";

echo("\n\nExample 1. Get the count of images in PDF file: ");
$imagesCount = SYSTEM::$pdffile->get_images_count($filePath);

echo($imagesCount . "\n");

// Quit the application
WINDOW::$app->quit();
?>