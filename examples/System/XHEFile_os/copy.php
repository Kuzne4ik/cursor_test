<?php
// Scenario: Demonstrates copying files with and without overwriting existing files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// Example 1: Copy a file with overwrite
echo "\n\n1. Copy file with overwrite: ";
$sourceFile = "test/test1.txt";
$targetFile = "test/test_copy.txt";
$overwrite = false;
$result = SYSTEM::$file_os->copy($sourceFile, $targetFile, $overwrite);
if ($result) {
    echo "File copied successfully\n";
} else {
    echo "Failed to copy file\n";
}

// Example 2: Copy a file without overwriting if it already exists
echo "\n2. Copy file without overwriting if it already exists: ";
$sourceFile = "test/test2.txt";
$targetFile = "test/test_copy.txt";
$overwrite = true;
$result = SYSTEM::$file_os->copy($sourceFile, $targetFile, $overwrite);
if (!$result) {
    echo "File already exists\n";
} else {
    echo "File copied successfully\n";
}

// Quit the application
WINDOW::$app->quit();
?>