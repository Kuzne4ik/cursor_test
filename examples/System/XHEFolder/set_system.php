<?php
// Scenario: Demonstrates how to check and set the SYSTEM attribute of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Reset the SYSTEM attribute of a folder
echo "\n\n";

// Set variables for resetting system attribute
$folderPath = "test1";
$setAttribute = false;

// Reset the SYSTEM attribute
echo "1. Reset SYSTEM attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_system($folderPath, $setAttribute);
if ($result) {
    echo "SYSTEM attribute reset successfully\n";
} else {
    echo "Failed to reset SYSTEM attribute\n";
}

// Example 2: Check if folder has SYSTEM attribute
echo "\n";

// Set variables for checking system attribute
$folderPath = "test1";

// Check if folder has SYSTEM attribute
echo "2. Check if folder '$folderPath' has SYSTEM attribute: ";
$isSystem = SYSTEM::$folder->is_system($folderPath);
if ($isSystem) {
    echo "Folder is SYSTEM\n";
} else {
    echo "Folder is not SYSTEM\n";
}

// Example 3: Set the SYSTEM attribute of a folder
echo "\n";

// Set variables for setting system attribute
$folderPath = "test1";
$setAttribute = true;

// Set the SYSTEM attribute
echo "3. Set SYSTEM attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_system($folderPath, $setAttribute);
if ($result) {
    echo "SYSTEM attribute set successfully\n";
} else {
    echo "Failed to set SYSTEM attribute\n";
}

// Example 4: Check again if folder has SYSTEM attribute
echo "\n";

// Set variables for checking system attribute again
$folderPath = "test1";

// Check again if folder has SYSTEM attribute
echo "4. Check again if folder '$folderPath' has SYSTEM attribute: ";
$isSystem = SYSTEM::$folder->is_system($folderPath);
if ($isSystem) {
    echo "Folder is SYSTEM\n";
} else {
    echo "Folder is not SYSTEM\n";
}

// Quit the application
WINDOW::$app->quit();
?>