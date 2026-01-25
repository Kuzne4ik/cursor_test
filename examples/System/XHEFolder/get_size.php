<?php
// Scenario: Demonstrates how to get the size of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get the size of a folder
echo "\n\n";

// Set variables for getting folder size
$folderPath = "test1";

// Get the size of the folder
echo "1. Get size of folder '$folderPath': ";
$size = SYSTEM::$folder->get_size($folderPath);
if ($size !== false) {
    echo $size . " bytes\n";
} else {
    echo "Failed to get folder size\n";
}

// Quit the application
WINDOW::$app->quit();
?>