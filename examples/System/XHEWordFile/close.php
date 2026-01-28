<?php
// Scenario: Close a Word document file
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

// Open the file with for read
SYSTEM::$wordfile->open($filePath, true);

// Example 1: Close the file
echo ("1. Close the file '$filePath': ");
$closeResult = SYSTEM::$wordfile->close($filePath);
if ($closeResult)
    echo("true\n");
else
    echo("false\n");


echo "\n";

// Quit the application
WINDOW::$app->quit();
?>