<?php
// Scenario: Demonstrates how to copy a folder and then rename it

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Copy a folder for renaming
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

// Example 2: Rename the copied folder
echo "\n";

// Set variables for folder rename operation
$sourceFolder = "test_copy";
$targetFolder = "test_rename";

// Rename the folder
echo "2. Rename folder from '$sourceFolder' to '$targetFolder': ";
$result = SYSTEM::$folder->rename($sourceFolder, $targetFolder);
if ($result) {
    echo "Folder renamed successfully\n";
} else {
    echo "Failed to rename folder\n";
}

// Quit the application
WINDOW::$app->quit();
?>