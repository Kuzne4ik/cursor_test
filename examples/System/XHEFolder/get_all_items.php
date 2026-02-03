<?php
// Scenario: Demonstrates how to get all items (files and folders) from a directory with different options

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >folder->" . basename (__FILE__) . "</span>\n";

// Example 1: Get all items from a specific folder
echo "\n\n";

// Set variables for getting items from a folder
$folderPath = "test1";

// Get all items from the specified folder
echo "1. Get all items from folder '$folderPath':\n";
$items = SYSTEM::$folder->get_all_items($folderPath);
echo $items . "\n\n";

// Example 2: Get all items from the current directory
echo "\n";

// Set variables for getting items from current directory
$folderPath = "";

// Get all items from the current directory
echo "2. Get all items from current directory:\n";
$items = SYSTEM::$folder->get_all_items($folderPath);
echo $items . "\n\n";

// Example 3: Get all subfolders from the current directory (recursive)
echo "\n";

// Set variables for getting subfolders recursively
$folderPath = "";
$recursive = true;
$foldersOnly = true;

// Get all subfolders from the current directory (recursive)
echo "3. Get all subfolders from current directory (recursive: $recursive, folders only: $foldersOnly):\n";
$items = SYSTEM::$folder->get_all_items($folderPath, $recursive, $foldersOnly);
echo $items . "\n";

// Quit the application
WINDOW::$app->quit();
?>