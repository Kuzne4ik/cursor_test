<?php
// Scenario: Get the number of tables in a Word document
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

// Example 1: Get the number of tables in the file
echo("1. Get the number of tables in the file: ");
$tableCount = SYSTEM::$wordfile->get_table_count($filePath);
echo($tableCount);

// Close the file
SYSTEM::$wordfile->close($filePath);

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>