<?php
// Scenario: Demonstrates checking if a file exists

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// Example 1: Check if file exists
echo "\n\n1. Check if file exists: ";
$filePath = "test/test1.txt";
$fileExists = SYSTEM::$file_os->is_exist($filePath);
if ($fileExists) {
    echo "File exists\n";
} else {
    echo "File does not exist\n";
}

// Quit the application
WINDOW::$app->quit();
?>