<?php 
// Scenario: Replace strings in a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Replace string in a file
// Set source file
$sourceFile = "test/test_count.txt";
// Set target file
$targetFile = "test/test_replaced.txt";
// Set search string
$searchString = "№";
// Set replace string
$replaceString = "#";
// Set timeout
$timeout = 60;

echo("1. Replace string '$searchString' with '$replaceString' in file $sourceFile and save to file $targetFile: ");
$result = SYSTEM::$textfile->replace_string($sourceFile, $targetFile, $searchString, $replaceString, $timeout);
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