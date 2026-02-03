<?php 
// Scenario: Get all text from a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$filePath = "test/test.docx";

//  Kill any existing Word processes
echo("Kill any existing Word processes: ");
SYSTEM::$word->kill();

// Open the file for read
SYSTEM::$word->open($filePath, true);

// Example 1: Get all text from the document
echo("\n1. Get all text from the document:\n");
$documentText = SYSTEM::$word->get_text($filePath);
echo($documentText . "\n");

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