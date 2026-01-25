<?php
// Scenario: Demonstrates how to copy a folder and then move it to a new location

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Copy a folder for moving
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

// Example 2: Move the copied folder to a new location
echo "\n";

// Set variables for folder move operation
$sourceFolder = "test_copy";
$targetFolder = "test_move";

// Move the folder
echo "2. Move folder from '$sourceFolder' to '$targetFolder': ";
$result = SYSTEM::$folder->move($sourceFolder, $targetFolder);
if ($result) {
    echo "Folder moved successfully\n";
} else {
    echo "Failed to move folder\n";
}

// Quit the application
WINDOW::$app->quit();
?>