<?php
// Scenario: Demonstrates how to get the disk drive of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Get the disk drive of a folder
echo "\n\n";

// Set variables for getting disk drive
$folderPath = "test1";

// Get the disk drive of the folder
echo "1. Get disk drive of folder '$folderPath': ";
$disk = SYSTEM::$folder->get_disk($folderPath);
if ($disk !== false) {
    echo $disk . "\n";
} else {
    echo "Failed to get disk drive\n";
}

// Quit the application
WINDOW::$app->quit();
?>