<?php
// Scenario: Create a new Word document file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >wordfile->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$filePath = "test/test_create.docx";
$fileText = "текст";

// Example 1: Create a file
echo("1. Create a file: ");
$createResult = SYSTEM::$wordfile->create($filePath, $fileText);
if ($createResult)
    echo("true\n");
else
    echo("false\n");

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>