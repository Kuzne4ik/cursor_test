<?php 
// Scenario: Create a new Word document
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
$initialText = "новый текст";

// Example 1: Create a new Word document
echo("1. Create docx file: ");
$result = SYSTEM::$word->create($filePath, $initialText);
if ($result) {
    echo("Successfully created document\n");
} else {
    echo("Failed to create document\n");
}
echo "\n";
// Quit the application
WINDOW::$app->quit();
?>