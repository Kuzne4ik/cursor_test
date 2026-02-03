<?php 

// Scenario: Get the number of tables in a Word document
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

// Kill any existing Word processes
echo("Kill any existing Word processes: ");
SYSTEM::$word->kill();

// Open the file for read
SYSTEM::$word->open($filePath, true);

// Example 1: Get the number of tables in the document
echo("\n1. Get number of tables in document: ");
$tablesCount = SYSTEM::$word->get_tables_count($filePath);
echo($tablesCount . "\n");

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