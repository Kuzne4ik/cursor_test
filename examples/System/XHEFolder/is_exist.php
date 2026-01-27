<?php
// Scenario: Demonstrates how to check if a folder exists

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Check if a folder exists
echo "\n\n";

// Set variables for checking folder existence
$folderPath = "test1";

// Check if the folder exists
echo "1. Check if folder '$folderPath' exists: ";
$exists = SYSTEM::$folder->is_exist($folderPath);
if ($exists) {
    echo "Folder exists\n";
} else {
    echo "Folder does not exist\n";
}

// Quit the application
WINDOW::$app->quit();
?>