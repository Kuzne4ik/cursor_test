<?php 
// Scenario: Split a file into multiple parts
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Split a file into multiple parts
// Set source file
$sourceFile = "test/test_dedupe.txt";
// Set target folder prefix
$targetPrefix = "test_split";
// Set number of parts
$partsCount = 3;
// Set timeout
$timeout = 60;

echo("1. Split file $sourceFile into $partsCount parts with prefix $targetPrefix : ");
$result = SYSTEM::$textfile->split_to_part($sourceFile, $targetPrefix, $partsCount, $timeout);
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