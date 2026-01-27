<?php
// Scenario: Demonstrates how to get the last access date of a folder, including handling non-existent folders

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Get last access date of a folder
echo "\n\n";

// Set variables for getting last access date
$folderPath = "test1";

// Get last access date of the folder
echo "1. Get last access date of folder '$folderPath': ";
$accessDate = SYSTEM::$folder->get_lastacess_date($folderPath);
if ($accessDate !== false) {
    echo $accessDate . "\n";
} else {
    echo "Failed to get last access date\n";
}

// Example 2: Get last access time of a folder
echo "\n";

// Set variables for getting last access time
$folderPath = "test1";
$getTimeOnly = true;

// Get last access time of the folder
echo "2. Get last access time of folder '$folderPath': ";
$accessTime = SYSTEM::$folder->get_lastacess_date($folderPath, $getTimeOnly);
if ($accessTime !== false) {
    echo $accessTime . "\n";
} else {
    echo "Failed to get last access time\n";
}

// Example 3: Try to get last access date of a non-existent folder
echo "\n";

// Set variables for non-existent folder
$nonExistentFolder = "test123";

// Try to get last access date of non-existent folder
echo "3. Try to get last access date of non-existent folder '$nonExistentFolder': ";
$accessDate = SYSTEM::$folder->get_lastacess_date($nonExistentFolder);
if ($accessDate !== false) {
    echo $accessDate . "\n";
} else {
    echo "Folder does not exist\n";
}

// Quit the application
WINDOW::$app->quit();
?>