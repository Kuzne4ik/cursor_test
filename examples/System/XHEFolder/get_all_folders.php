<?php
// Scenario: Demonstrates how to get all subfolders from a directory with specific filters

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >folder->" . basename (__FILE__) . "</span>\n";

// Example 1: Get all subfolders from a specific directory with filter
echo "\n\n";

// Set variables for getting subfolders
$folderPath = "d:/App";
$recursive = false;
$folderFilter = "S*";

// Get all subfolders from the specified directory
echo "1. Get all subfolders from '$folderPath' (recursive: $recursive, filter: $folderFilter):\n";
$subfolders = SYSTEM::$folder->get_all_folders($folderPath, $recursive, $folderFilter);
print_r($subfolders);

// Quit the application
WINDOW::$app->quit();
?>