<?php
// Scenario: Demonstrates how to create a ZIP archive of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >folder->" . basename (__FILE__) . "</span>\n";

// Delete existing zip file if it exists
echo "\n\n";

// Set variables for deleting existing zip file
$existingZipFile = "test.zip";

// Delete the existing zip file
echo "Delete existing zip file '$existingZipFile': ";
$result = SYSTEM::$file_os->delete($existingZipFile);
if ($result) {
    echo "Existing zip file deleted successfully\n";
} else {
    echo "No existing zip file to delete or failed to delete\n";
}

// Example 1: Create a ZIP archive of a folder
echo "\n";

// Set variables for creating ZIP archive
$sourceFolder = "data";
$targetZipFile = "test.zip";

// Create ZIP archive of the folder
echo "1. Create ZIP archive of folder '$sourceFolder' to '$targetZipFile': ";
$result = SYSTEM::$folder->zip($sourceFolder, $targetZipFile);
if ($result) {
    echo "ZIP archive created successfully\n";
} else {
    echo "Failed to create ZIP archive\n";
}

// Quit the application
WINDOW::$app->quit();
?>