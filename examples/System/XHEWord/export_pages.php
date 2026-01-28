<?php 
// Scenario: Export specific pages from a Word document to PDF
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Initialize variables
$sourceFilePath = "test/test.docx";
$outputFilePath = "test/test.pdf";
$startPage = 1;
$endPage = 1;

// Example 1: Export page 1 to PDF
echo("1. Export page 1 to PDF: ");
$result = SYSTEM::$word->export_pages($sourceFilePath, $outputFilePath, $startPage, $endPage);
if ($result) {
    echo("Successfully exported page to PDF\n");
} else {
    echo("Failed to export page to PDF\n");
}
echo "\n";
// Quit the application
WINDOW::$app->quit();
?>