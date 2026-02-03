<?php
// Scenario: Find the page number containing specific text in a PDF file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >pdffile->" . basename (__FILE__) . "</span>\n";

// Example 1: Find the page number containing specific text
// Input data
$filePath = "test/test.pdf";
$searchText = "jэu";
$startPage = 0;

echo("\n\nExample 1. Find the page number containing specific text: ");
$pageNumber = SYSTEM::$pdffile->get_page_number_by_text($filePath, $searchText, $startPage);

echo($pageNumber . "\n");

// Quit the application
WINDOW::$app->quit();
?>