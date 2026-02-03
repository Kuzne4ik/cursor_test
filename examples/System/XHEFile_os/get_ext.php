<?php
// Scenario: Demonstrates getting file extension

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Get file extension
echo "\n\n1. Get file extension: ";
$filePath = "test/test1.txt";
$fileExtension = SYSTEM::$file_os->get_ext($filePath);
if ($fileExtension !== false) {
    echo "File extension: " . $fileExtension . "\n";
} else {
    echo "Failed to get file extension\n";
}

// Quit the application
WINDOW::$app->quit();
?>