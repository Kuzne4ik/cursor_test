<?php 
// Scenario: Read content from a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Example 1: Read a file
// Set file path
$filePath = "test/test_count.txt";
// Set timeout
$timeout = 60;

echo("1. Read file $filePath: \n");
$content = SYSTEM::$textfile->read_file($filePath, $timeout);
echo($content);

// End
echo "\n";

// Quit the application
$app->quit();
?>