<?php
// Scenario: Read specific pages from a PDF file as text

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Example 1: Read page 0 from PDF file as text
// Input data
$filePath = "test/test.pdf";
$pageNumber = 0;

echo("\n\nExample 1. Read page 0 from PDF file as text:\n\n");
$pageContent = SYSTEM::$pdffile->read_page($filePath, $pageNumber);

echo($pageContent);

// Example 2: Read page 1 from PDF file as text
// Input data
$pageNumber2 = 1;

echo("\n\nExample 2. Read page 1 from PDF file as text:\n\n");
$pageContent2 = SYSTEM::$pdffile->read_page($filePath, $pageNumber2);

echo($pageContent2);

// Quit the application
WINDOW::$app->quit();
?>