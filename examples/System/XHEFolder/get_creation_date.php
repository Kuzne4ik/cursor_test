<?php
// Scenario: Demonstrates how to get the creation date of a folder, including handling non-existent folders

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get creation date of a folder
echo "\n\n";

// Set variables for getting creation date
$folderPath = "test1";

// Get creation date of the folder
echo "1. Get creation date of folder '$folderPath': ";
$creationDate = SYSTEM::$folder->get_creation_date($folderPath);
if ($creationDate !== false) {
    echo $creationDate . "\n";
} else {
    echo "Failed to get creation date\n";
}

// Example 2: Get creation time of a folder
echo "\n";

// Set variables for getting creation time
$folderPath = "test1";
$getTimeOnly = true;

// Get creation time of the folder
echo "2. Get creation time of folder '$folderPath': ";
$creationTime = SYSTEM::$folder->get_creation_date($folderPath, $getTimeOnly);
if ($creationTime !== false) {
    echo $creationTime . "\n";
} else {
    echo "Failed to get creation time\n";
}

// Example 3: Try to get creation date of a non-existent folder
echo "\n";

// Set variables for non-existent folder
$nonExistentFolder = "test123";

// Try to get creation date of non-existent folder
echo "3. Try to get creation date of non-existent folder '$nonExistentFolder': ";
$creationDate = SYSTEM::$folder->get_creation_date($nonExistentFolder);
if ($creationDate !== false) {
    echo $creationDate . "\n";
} else {
    echo "Folder does not exist\n";
}

// Quit the application
WINDOW::$app->quit();
?>