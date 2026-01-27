<?php
// Scenario: Get all links from a PDF file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Example 1: Get all links from PDF file
// Input data
$filePath = "test/test.pdf";

echo("\n\nExample 1. Get all links from PDF file: ");
$allLinks = SYSTEM::$pdffile->get_all_links($filePath);

// Print all links
var_export($allLinks);

// Quit the application
WINDOW::$app->quit();
?>