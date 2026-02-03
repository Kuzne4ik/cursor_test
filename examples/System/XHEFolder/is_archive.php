<?php
// Scenario: Demonstrates how to check and set the ARCHIVE attribute of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >folder->" . basename (__FILE__) . "</span>\n";

// Example 1: Reset the ARCHIVE attribute of a folder
echo "\n\n";

// Set variables for resetting archive attribute
$folderPath = "test1";
$setAttribute = false;

// Reset the ARCHIVE attribute
echo "1. Reset ARCHIVE attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_archive($folderPath, $setAttribute);
if ($result) {
    echo "ARCHIVE attribute reset successfully\n";
} else {
    echo "Failed to reset ARCHIVE attribute\n";
}

// Example 2: Check if folder has ARCHIVE attribute
echo "\n";

// Set variables for checking archive attribute
$folderPath = "test1";

// Check if folder has ARCHIVE attribute
echo "2. Check if folder '$folderPath' has ARCHIVE attribute: ";
$isArchive = SYSTEM::$folder->is_archive($folderPath);
if ($isArchive) {
    echo "Folder is ARCHIVE\n";
} else {
    echo "Folder is not ARCHIVE\n";
}

// Example 3: Set the ARCHIVE attribute of a folder
echo "\n";

// Set variables for setting archive attribute
$folderPath = "test1";
$setAttribute = true;

// Set the ARCHIVE attribute
echo "3. Set ARCHIVE attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_archive($folderPath, $setAttribute);
if ($result) {
    echo "ARCHIVE attribute set successfully\n";
} else {
    echo "Failed to set ARCHIVE attribute\n";
}

// Example 4: Check again if folder has ARCHIVE attribute
echo "\n";

// Set variables for checking archive attribute again
$folderPath = "test1";

// Check again if folder has ARCHIVE attribute
echo "4. Check again if folder '$folderPath' has ARCHIVE attribute: ";
$isArchive = SYSTEM::$folder->is_archive($folderPath);
if ($isArchive) {
    echo "Folder is ARCHIVE\n";
} else {
    echo "Folder is not ARCHIVE\n";
}

// Quit the application
WINDOW::$app->quit();
?>