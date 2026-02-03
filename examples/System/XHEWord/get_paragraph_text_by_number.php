<?php 
// Scenario: Get paragraph text by paragraph number in a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$filePath = "test/test_create.docx";
$paragraphNumber = 0;

// Open the file for read
SYSTEM::$word->open($filePath, true);

// Example 1: Get text of paragraph by number
echo("1. Get text of paragraph number $paragraphNumber: ");
$paragraphText = SYSTEM::$word->get_paragraph_text_by_number($filePath, $paragraphNumber);
echo($paragraphText . "\n");

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