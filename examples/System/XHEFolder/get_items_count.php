<?php
// Scenario: Demonstrates how to get the count of items in a folder with different options

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Get count of items in a specific folder
echo "\n\n";

// Set variables for getting item count
$folderPath = "test1";

// Get count of items in the folder
echo "1. Get count of items in folder '$folderPath': ";
$count = SYSTEM::$folder->get_items_count($folderPath);
if ($count !== false) {
    echo $count . " items\n";
} else {
    echo "Failed to get item count\n";
}

// Example 2: Get count of items in the current directory
echo "\n";

// Set variables for getting item count in current directory
$folderPath = "";

// Get count of items in the current directory
echo "2. Get count of items in current directory: ";
$count = SYSTEM::$folder->get_items_count($folderPath);
if ($count !== false) {
    echo $count . " items\n";
} else {
    echo "Failed to get item count\n";
}

// Example 3: Get count of subfolders in the current directory (recursive)
echo "\n";

// Set variables for getting subfolder count
$folderPath = "";
$recursive = true;
$foldersOnly = true;

// Get count of subfolders in the current directory (recursive)
echo "3. Get count of subfolders in current directory (recursive: $recursive, folders only: $foldersOnly): ";
$count = SYSTEM::$folder->get_items_count($folderPath, $recursive, $foldersOnly);
if ($count !== false) {
    echo $count . " subfolders\n";
} else {
    echo "Failed to get subfolder count\n";
}

// Quit the application
WINDOW::$app->quit();
?>