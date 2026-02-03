<?php 
// Scenario: Export all pages of a Word document to PDF files
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$sourceFilePath = "test/test.docx";
$outputFolder = "pdfs";
$outputFormat = "pdf";
$searchTextArray = array("12345", "678");
$exactMatch = true;

// Example 1: Export all pages to PDF
echo("1. Export all pages to PDF: ");
$result = SYSTEM::$word->export_all_pages($sourceFilePath, $outputFolder);
if ($result) {
    echo("Successfully exported all pages\n");
} else {
    echo("Failed to export all pages\n");
}

// Clear the output folder
SYSTEM::$folder->clear($outputFolder);

// Example 2: Export all pages with specified text to PDF
echo("\n2. Export all pages with specified text to PDF: ");
$result = SYSTEM::$word->export_all_pages($sourceFilePath, $outputFolder, $outputFormat, $searchTextArray, $exactMatch);
if ($result) {
    echo("Successfully exported pages with specified text\n");
} else {
    echo("Failed to export pages with specified text\n");
}
echo "\n";
// Quit the application
WINDOW::$app->quit();
?>