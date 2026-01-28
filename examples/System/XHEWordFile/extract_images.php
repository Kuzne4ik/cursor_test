<?php
// Scenario: Extract images from a Word document
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
$outputFolder = "test/images";

// Open the file to read
SYSTEM::$wordfile->open($filePath, true);

// Example 1: Extract images from the document
echo("1. Extract images from the document: ");
$extractResult = SYSTEM::$wordfile->extract_images($filePath, $outputFolder);
if ($extractResult)
    echo("true\n");
else
    echo("false\n");

// Close the file
SYSTEM::$wordfile->close($filePath);

// Open the folder with extracted images
//$app->shell_execute("open", $outputFolder);

echo "\n";

// Quit the application
$app->quit();
?>