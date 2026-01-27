<?php
// Scenario: Get the total number of pages in a PDF file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Example 1: Get the total number of pages in PDF file
// Input data
$filePath = "test/test.pdf";

echo("\n\nExample 1. Get the total number of pages in PDF file: ");
$pageCount = SYSTEM::$pdffile->get_page_count($filePath);

echo($pageCount . "\n");

// Quit the application
WINDOW::$app->quit();
?>