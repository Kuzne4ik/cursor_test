<?php
// Scenario: Demonstrates getting file title (filename without extension)

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Get file title (filename without extension)
echo "\n\n1. Get file title (filename without extension): ";
$filePath = "test/test1.txt";
$fileTitle = SYSTEM::$file_os->get_title($filePath);
if ($fileTitle !== false) {
    echo "File title: " . $fileTitle . "\n";
} else {
    echo "Failed to get file title\n";
}

// Quit the application
WINDOW::$app->quit();
?>