<?php
// Scenario: Read the content of a Word document as text
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >wordfile->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$filePath = "test/test.docx";

// Open the file to read
SYSTEM::$wordfile->open($filePath, true);

// Example 1: Read the specified file as text
echo("1. Read the specified file as text: ");
$fileContent = SYSTEM::$wordfile->read($filePath);
echo($fileContent);

// Close the file
SYSTEM::$wordfile->close($filePath);

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>