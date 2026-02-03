<?php
// Scenario: Demonstrates how to clear the contents of a folder after copying it

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >folder->" . basename (__FILE__) . "</span>\n";

// Example 1: Copy a folder and then clear its contents
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

// Set variables for folder clear operation
$folderToClear = "test_copy";

// Clear the folder contents
echo "2. Clear contents of folder '$folderToClear': ";
$result = SYSTEM::$folder->clear($folderToClear);
if ($result) {
    echo "Folder cleared successfully\n";
} else {
    echo "Failed to clear folder\n";
}

// Quit the application
WINDOW::$app->quit();
?>