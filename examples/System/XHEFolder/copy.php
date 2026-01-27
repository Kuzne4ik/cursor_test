<?php
// Scenario: Demonstrates how to copy a folder to a new location

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Copy a folder to a new location
echo "\n\n";

// Set variables for folder copy operation
$sourceFolder = "test1";
$targetFolder = "test_copy";
$overwrite = false;

// Copy the folder
echo "1. Copy folder from '$sourceFolder' to '$targetFolder': ";
$result = SYSTEM::$folder->copy($sourceFolder, $targetFolder, $overwrite);
if ($result) {
    echo "Folder copied successfully\n";
} else {
    echo "Failed to copy folder\n";
}

// Quit the application
WINDOW::$app->quit();
?>