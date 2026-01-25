<?php
// Scenario: Demonstrates how to check and set the READONLY attribute of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Reset the READONLY attribute of a folder
echo "\n\n";

// Set variables for resetting readonly attribute
$folderPath = "test1";
$setAttribute = false;

// Reset the READONLY attribute
echo "1. Reset READONLY attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_readonly($folderPath, $setAttribute);
if ($result) {
    echo "READONLY attribute reset successfully\n";
} else {
    echo "Failed to reset READONLY attribute\n";
}

// Example 2: Check if folder has READONLY attribute
echo "\n";

// Set variables for checking readonly attribute
$folderPath = "test1";

// Check if folder has READONLY attribute
echo "2. Check if folder '$folderPath' has READONLY attribute: ";
$isReadonly = SYSTEM::$folder->is_readonly($folderPath);
if ($isReadonly) {
    echo "Folder is READONLY\n";
} else {
    echo "Folder is not READONLY\n";
}

// Example 3: Set the READONLY attribute of a folder
echo "\n";

// Set variables for setting readonly attribute
$folderPath = "test1";
$setAttribute = true;

// Set the READONLY attribute
echo "3. Set READONLY attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_readonly($folderPath, $setAttribute);
if ($result) {
    echo "READONLY attribute set successfully\n";
} else {
    echo "Failed to set READONLY attribute\n";
}

// Example 4: Check again if folder has READONLY attribute
echo "\n";

// Set variables for checking readonly attribute again
$folderPath = "test1";

// Check again if folder has READONLY attribute
echo "4. Check again if folder '$folderPath' has READONLY attribute: ";
$isReadonly = SYSTEM::$folder->is_readonly($folderPath);
if ($isReadonly) {
    echo "Folder is READONLY\n";
} else {
    echo "Folder is not READONLY\n";
}

// Quit the application
WINDOW::$app->quit();
?>