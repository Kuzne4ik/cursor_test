<?php
// Scenario: Demonstrates how to check and set the NORMAL attribute of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>folder->" . basename (__FILE__) . "</font>\n";

// Example 1: Reset the NORMAL attribute of a folder
echo "\n\n";

// Set variables for resetting normal attribute
$folderPath = "test1";
$setAttribute = false;

// Reset the NORMAL attribute
echo "1. Reset NORMAL attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_normal($folderPath, $setAttribute);
if ($result) {
    echo "NORMAL attribute reset successfully\n";
} else {
    echo "Failed to reset NORMAL attribute\n";
}

// Example 2: Check if folder has NORMAL attribute
echo "\n";

// Set variables for checking normal attribute
$folderPath = "test1";

// Check if folder has NORMAL attribute
echo "2. Check if folder '$folderPath' has NORMAL attribute: ";
$isNormal = SYSTEM::$folder->is_normal($folderPath);
if ($isNormal) {
    echo "Folder is NORMAL\n";
} else {
    echo "Folder is not NORMAL\n";
}

// Example 3: Set the NORMAL attribute of a folder
echo "\n";

// Set variables for setting normal attribute
$folderPath = "test1";
$setAttribute = true;

// Set the NORMAL attribute
echo "3. Set NORMAL attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_normal($folderPath, $setAttribute);
if ($result) {
    echo "NORMAL attribute set successfully\n";
} else {
    echo "Failed to set NORMAL attribute\n";
}

// Example 4: Check again if folder has NORMAL attribute
echo "\n";

// Set variables for checking normal attribute again
$folderPath = "test1";

// Check again if folder has NORMAL attribute
echo "4. Check again if folder '$folderPath' has NORMAL attribute: ";
$isNormal = SYSTEM::$folder->is_normal($folderPath);
if ($isNormal) {
    echo "Folder is NORMAL\n";
} else {
    echo "Folder is not NORMAL\n";
}

// Quit the application
WINDOW::$app->quit();
?>