<?php 
// Scenario: Write a string to a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Example 1: Write a string to a file
// Set file path
$filePath = "test/test_write.txt";
// Set string to write
$stringToWrite = "127.0.0.1";
// Set timeout
$timeout = 60;

echo("1. Write string \"$stringToWrite\" to file $filePath in script directory : ");
$result = SYSTEM::$textfile->write_file($filePath, $stringToWrite, $timeout);
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