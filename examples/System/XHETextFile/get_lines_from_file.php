<?php 
// Scenario: Get specific lines from a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Example 1: Get specified lines from a file
// Set file path
$filePath = "test/test_dedupe.txt";
// Set start line (0-based)
$startLine = 2;
// Set number of lines to get
$linesCount = 5;
// Set timeout
$timeout = 60;

echo("1. Get specified lines ($linesCount lines, starting from line $startLine) from file $filePath (line numbering starts from 0): \n");
$lines = SYSTEM::$textfile->get_lines_from_file($filePath, $startLine, $linesCount, $timeout);
echo($lines);

// End
echo "\n";

// Quit the application
$app->quit();
?>