<?php
// Scenario: Demonstrates how to create new folders, including handling invalid folder names

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Create a valid folder
echo "\n\n";

// Set variables for folder creation
$folderName = "new_folder";

// Create the folder
echo "1. Create folder '$folderName': ";
$result = SYSTEM::$folder->create($folderName);
if ($result) {
    echo "Folder created successfully\n";
} else {
    echo "Failed to create folder\n";
}

// Example 2: Try to create a folder with invalid characters
echo "\n";

// Set variables for invalid folder creation
$invalidFolderName = "new_folder*";

// Try to create the folder with invalid name
echo "2. Try to create folder with invalid characters '$invalidFolderName': ";
$result = SYSTEM::$folder->create($invalidFolderName);
if ($result) {
    echo "Folder created successfully\n";
} else {
    echo "Failed to create folder (invalid characters)\n";
}

// Quit the application
WINDOW::$app->quit();
?>