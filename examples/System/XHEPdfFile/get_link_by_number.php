<?php
// Scenario: Get a specific link from a PDF file by its index number

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Example 1: Get a specific link by its index number
// Input data
$filePath = "test/test.pdf";
$linkNumber = 0;

echo("\n\nExample 1. Get a specific link by its index number: ");
$link = SYSTEM::$pdffile->get_link_by_number($filePath, $linkNumber);

echo($link . "\n");

// Quit the application
WINDOW::$app->quit();
?>