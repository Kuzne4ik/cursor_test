<?php
// Scenario: Demonstrates how to get the name of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get the name of a folder
echo "\n\n";

// Set variables for getting folder name
$folderPath = "test1";

// Get the name of the folder
echo "1. Get name of folder '$folderPath': ";
$name = SYSTEM::$folder->get_name($folderPath);
if ($name !== false) {
    echo $name . "\n";
} else {
    echo "Failed to get folder name\n";
}

// Quit the application
WINDOW::$app->quit();
?>