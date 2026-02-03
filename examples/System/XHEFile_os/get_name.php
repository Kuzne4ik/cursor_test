<?php
// Scenario: Demonstrates getting file name from path

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Get file name
echo "\n\n1. Get file name: ";
$filePath = "test/test1.txt";
$fileName = SYSTEM::$file_os->get_name($filePath);
if ($fileName !== false) {
    echo "File name: " . $fileName . "\n";
} else {
    echo "Failed to get file name\n";
}

// Quit the application
WINDOW::$app->quit();
?>