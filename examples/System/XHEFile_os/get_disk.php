<?php
// Scenario: Demonstrates getting the disk name where a file is located

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get disk name where file is located
echo "\n\n1. Get disk name where file is located: ";
$filePath = "test/test1.txt";
$diskName = SYSTEM::$file_os->get_disk($filePath);
if ($diskName !== false) {
    echo "File is located on disk: " . $diskName . "\n";
} else {
    echo "Failed to get disk name\n";
}

// Quit the application
WINDOW::$app->quit();
?>