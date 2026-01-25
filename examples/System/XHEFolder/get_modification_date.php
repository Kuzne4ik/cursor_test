<?php
// Scenario: Demonstrates how to get the modification date of a folder, including handling non-existent folders

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get modification date of a folder
echo "\n\n";

// Set variables for getting modification date
$folderPath = "test1";

// Get modification date of the folder
echo "1. Get modification date of folder '$folderPath': ";
$modDate = SYSTEM::$folder->get_modification_date($folderPath);
if ($modDate !== false) {
    echo $modDate . "\n";
} else {
    echo "Failed to get modification date\n";
}

// Example 2: Get modification time of a folder
echo "\n";

// Set variables for getting modification time
$folderPath = "test1";
$getTimeOnly = true;

// Get modification time of the folder
echo "2. Get modification time of folder '$folderPath': ";
$modTime = SYSTEM::$folder->get_modification_date($folderPath, $getTimeOnly);
if ($modTime !== false) {
    echo $modTime . "\n";
} else {
    echo "Failed to get modification time\n";
}

// Example 3: Try to get modification date of a non-existent folder
echo "\n";

// Set variables for non-existent folder
$nonExistentFolder = "test123";

// Try to get modification date of non-existent folder
echo "3. Try to get modification date of non-existent folder '$nonExistentFolder': ";
$modDate = SYSTEM::$folder->get_modification_date($nonExistentFolder);
if ($modDate !== false) {
    echo $modDate . "\n";
} else {
    echo "Folder does not exist\n";
}

// Quit the application
WINDOW::$app->quit();
?>