<?php 
// Scenario: Exclude strings from one file that exist in another file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Example 1: Exclude strings from source file that exist in exclude file
// Set source file
$sourceFile = "test/test_exclude_src.txt";
// Set exclude file
$excludeFile = "test/test_exclude_exclude.txt";
// Set result file
$resultFile = "test/test_exclude_results.txt";
// Set timeout
$timeout = 60;

echo("1. Exclude strings from source file $sourceFile that exist in exclude file $excludeFile and write result to file $resultFile : ");
$result = SYSTEM::$textfile->exclude_strings_file_from_file($sourceFile, $excludeFile, $resultFile, $timeout);
if ($result) {
    echo("true\n");
} else {
    echo("false\n");
}

// End
echo "\n";

// Quit the application
$app->quit();
?>