<?php
// Scenario: Demonstrates waiting for a file to exist

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// Example 1: Wait for file to exist
echo "\n\n1. Wait for file to exist: ";
$filePath = "test/test1.txt";
$result = SYSTEM::$file_os->wait_for_exist($filePath);
if ($result) {
    echo "File exists\n";
} else {
    echo "File does not exist\n";
}

// Example 2: Wait for non-existent file to appear within 20 seconds
echo "\n2. Wait for non-existent file to appear within 20 seconds: ";
$filePath = "test/testXX1X.txt";
$timeout = 20;
$checkInterval = 1;
$result = SYSTEM::$file_os->wait_for_exist($filePath, $timeout, $checkInterval);
if ($result) {
    echo "File exists\n";
} else {
    echo "File does not exist within timeout period\n";
}

// Quit the application
WINDOW::$app->quit();
?>