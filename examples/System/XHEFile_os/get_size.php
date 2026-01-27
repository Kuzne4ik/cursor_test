<?php
// Scenario: Demonstrates getting file size

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// Example 1: Get file size
echo "\n\n1. Get file size: ";
$filePath = "test/test1.txt";
$fileSize = SYSTEM::$file_os->get_size($filePath);
if ($fileSize !== false) {
    echo "File size: " . $fileSize . " bytes\n";
} else {
    echo "Failed to get file size\n";
}

// Quit the application
WINDOW::$app->quit();
?>