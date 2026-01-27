<?php
// Scenario: Demonstrates how to copy a folder and then delete it

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Copy a folder for deletion
echo "\n\n";

// Set variables for folder copy operation
$sourceFolder = "test1";
$targetFolder = "test_del";
$overwrite = false;

// Copy the folder
echo "1. Copy folder from '$sourceFolder' to '$targetFolder': ";
$result = SYSTEM::$folder->copy($sourceFolder, $targetFolder, $overwrite);
if ($result) {
    echo "Folder copied successfully\n";
} else {
    echo "Failed to copy folder\n";
}

// Example 2: Delete the copied folder
echo "\n";

// Set variables for folder deletion
$folderToDelete = "test_del";

// Delete the folder
echo "2. Delete folder '$folderToDelete': ";
$result = SYSTEM::$folder->delete($folderToDelete);
if ($result) {
    echo "Folder deleted successfully\n";
} else {
    echo "Failed to delete folder\n";
}

// Quit the application
WINDOW::$app->quit();
?>