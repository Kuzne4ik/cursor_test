<?php
// Scenario: Demonstrates waiting for file existence and copying completion

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// File path
$filePath = "E:/Disk Copy/B917A2DBC6B2900F-00-00.mrimg";

// Example 1: Wait for file to appear within 200 seconds
echo "\n\n1. Wait for file to appear within 200 seconds: ";
$timeout = 200;
$checkInterval = 1;
$result = SYSTEM::$file_os->wait_for_exist($filePath, $timeout, $checkInterval);
if ($result) {
    echo "File exists\n";
} else {
    echo "File does not exist within timeout period\n";
}

// Example 2: Wait for file copying to complete
echo "\n2. Wait for file copying to complete: ";
$result = SYSTEM::$file_os->wait_copy($filePath);
if ($result) {
    echo "File copying completed\n";
} else {
    echo "File copying not completed or failed\n";
}

// Quit the application
WINDOW::$app->quit();
?>