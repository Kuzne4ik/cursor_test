<?php 
// Scenario: Get encoding of a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Get encoding of a file
// Set file path
$filePath = "test/test_dedupe.txt";

echo("1. Get encoding of file $filePath: ");
$encoding = SYSTEM::$textfile->get_encoding($filePath);
echo($encoding . "\n");

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>