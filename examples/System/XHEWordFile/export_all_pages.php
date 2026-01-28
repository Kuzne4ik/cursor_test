<?php
// Scenario: Export all pages from a Word document to different formats
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>wordfile->" . basename (__FILE__) . "</font>\n";

// Initialize variables
$filePath = "test/test.docx";
$outputFolder = "docx";
$outputFormat = "docx";
$pdfFolder = "pdfs";
$pdfFormat = "pdf";
$searchTexts = array("12345", "678");
$withText = true;

// Example 1: Export all pages to docx format
echo("1. Export all pages to docx format: ");
$exportResult1 = SYSTEM::$word->export_all_pages($filePath, $outputFolder, $outputFormat);
if ($exportResult1)
    echo("true\n");
else
    echo("false\n");

// Example 2: Export all pages to pdf format with specified text
echo("\n2. Export all pages to pdf format with specified text: ");
$exportResult2 = SYSTEM::$wordfile->export_all_pages($filePath, $pdfFolder, $pdfFormat);
if ($exportResult2)
    echo("true\n");
else
    echo("false\n");

// Open the exported pdf files
//$app->shell_execute("open", $pdfFolder);

echo "\n";

sleep(1);

// Quit the application
$app->quit();
?>