<?php 

// Scenario: Count the number of lines in a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Count lines in a file
// Set file path
$filePath = "test/test_count.txt";
// Set timeout
$timeout = 60;

echo("1. Count number of lines in file $filePath: ");
$linesCount = SYSTEM::$textfile->get_lines_count($filePath, $timeout);
echo($linesCount . "\n");

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>