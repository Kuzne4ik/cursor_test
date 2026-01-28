<?php 
// Scenario: Get the number of pages in a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Initialize variables
$filePath = "test/test.docx";

// Open the file for read
SYSTEM::$word->open($filePath, true);

// Example 1: Get the number of pages in the document
echo("1. Get number of pages in document: ");
$pagesCount = SYSTEM::$word->get_pages_count($filePath);
echo($pagesCount . "\n");

// Close stream with file: ");
echo("\nClose exists Word file: ");
$closeResult = SYSTEM::$word->close($filePath);
if ($closeResult)
  echo("Word file '$filePath' closed successfully");
else
  echo("Word file '$filePath' close fail");

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>