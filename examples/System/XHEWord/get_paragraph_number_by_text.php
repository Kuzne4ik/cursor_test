<?php 
// Scenario: Get paragraph number by text content in a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Initialize variables
$filePath = "test/test_create.docx";
$searchText = "новом";
$exactly = false;

// Open the file for read
SYSTEM::$word->open($filePath, true);

// Example 1: Get paragraph number by text
echo("1. Get paragraph number by text: ");
$paragraphNumber = SYSTEM::$word->get_paragraph_number_by_text($filePath, $searchText, $exactly);
echo($paragraphNumber . "\n");

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