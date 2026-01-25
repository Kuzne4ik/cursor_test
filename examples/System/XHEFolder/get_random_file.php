<?php
// Scenario: Demonstrates how to get a random file from a folder with different options

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get a random PHP file from a folder
echo "\n\n";

// Set variables for getting random file
$folderPath = "test1";
$fileExtension = "php";
$recursive = false;

// Get a random PHP file from the folder
echo "1. Get random '$fileExtension' file from folder '$folderPath' (recursive: $recursive): ";
$randomFile = SYSTEM::$folder->get_random_file($folderPath, $fileExtension, $recursive);
if ($randomFile !== false) {
    echo $randomFile . "\n";
} else {
    echo "Failed to get random file\n";
}

// Example 2: Get a random TXT file from a folder and its subfolders
echo "\n";

// Set variables for getting random file recursively
$folderPath = "test1";
$fileExtension = "txt";
$recursive = true;

// Get a random TXT file from the folder and its subfolders
echo "2. Get random '$fileExtension' file from folder '$folderPath' (recursive: $recursive): ";
$randomFile = SYSTEM::$folder->get_random_file($folderPath, $fileExtension, $recursive);
if ($randomFile !== false) {
    echo $randomFile . "\n";
} else {
    echo "Failed to get random file\n";
}

// Quit the application
WINDOW::$app->quit();
?>