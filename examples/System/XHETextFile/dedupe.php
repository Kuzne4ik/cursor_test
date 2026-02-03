<?php 
// Scenario: Remove duplicate lines from a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Remove duplicates from a file
// Set source file
$sourceFile = "test/test_dedupe.txt";
// Set target file
$targetFile = "test/test_dedupe.txt";

echo("1. Remove duplicates from file $sourceFile: ");
$result = SYSTEM::$textfile->dedupe($sourceFile, $targetFile);
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