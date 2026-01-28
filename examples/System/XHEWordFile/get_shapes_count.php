<?php
// Scenario: Get the number of shapes in a Word document
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

// Open the file to read
SYSTEM::$wordfile->open($filePath, true);

// Example 1: Get the number of shapes in the file
echo("1. Get the number of shapes in the file: ");
$shapesCount = SYSTEM::$wordfile->get_shapes_count($filePath);
echo($shapesCount);

// Close the file
SYSTEM::$wordfile->close($filePath);


echo "\n";

// Quit the application
$app->quit();
?>