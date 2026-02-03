<?php 
// Scenario: Get the folder where a file is located
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Get folder of a file
// Set file path
$filePath = "C:/Windows/hh.exe";
// Set timeout
$timeout = 10;

echo("1. Get folder where file $filePath is located : ");
$folder = SYSTEM::$textfile->get_file_folder($filePath, $timeout);
echo($folder . "\n");

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>