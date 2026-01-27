<?php
// Scenario: Demonstrates how to get all files from a folder with specific filters

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Get all PDF files from a specific directory
echo "\n\n";

// Set variables for getting files
$folderPath = "E:/Test";
$recursive = true;
$fileFilter = "*.pdf";

// Get all PDF files from the specified directory
echo "1. Get all PDF files from '$folderPath' (recursive: $recursive, filter: $fileFilter):\n";
$files = SYSTEM::$folder->get_all_files($folderPath, $recursive, $fileFilter);
print_r($files);

// Quit the application
WINDOW::$app->quit();
?>