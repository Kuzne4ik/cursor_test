<?php 
// Scenario: Sort lines in a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Sort lines in a file
// Set source file
$sourceFile = "test/test_dedupe.txt";
// Set target file
$targetFile = "test/test_sorted.txt";
// Set timeout
$timeout = 60;

echo("1. Sort lines in file $sourceFile and save to file $targetFile : ");
$result = SYSTEM::$textfile->sort($sourceFile, $targetFile, $timeout);
if ($result) {
    echo("true\n");
} else {
    echo("false\n");
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>