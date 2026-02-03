<?php
// Scenario: Read the entire content of a PDF file as text

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >pdffile->" . basename (__FILE__) . "</span>\n";

// Example 1: Read the entire content of a PDF file as text
// Input data
$filePath = "test/test.pdf";

echo("\n\nExample 1. Read the entire content of a PDF file as text:\n\n");
$pdfContent = SYSTEM::$pdffile->read($filePath);

echo($pdfContent);

// Quit the application
WINDOW::$app->quit();
?>