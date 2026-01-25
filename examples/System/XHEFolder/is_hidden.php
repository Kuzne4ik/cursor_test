<?php
// Scenario: Demonstrates how to check and set the HIDDEN attribute of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Reset the HIDDEN attribute of a folder
echo "\n\n";

// Set variables for resetting hidden attribute
$folderPath = "test1";
$setAttribute = false;

// Reset the HIDDEN attribute
echo "1. Reset HIDDEN attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_hidden($folderPath, $setAttribute);
if ($result) {
    echo "HIDDEN attribute reset successfully\n";
} else {
    echo "Failed to reset HIDDEN attribute\n";
}

// Example 2: Check if folder has HIDDEN attribute
echo "\n";

// Set variables for checking hidden attribute
$folderPath = "test1";

// Check if folder has HIDDEN attribute
echo "2. Check if folder '$folderPath' has HIDDEN attribute: ";
$isHidden = SYSTEM::$folder->is_hidden($folderPath);
if ($isHidden) {
    echo "Folder is HIDDEN\n";
} else {
    echo "Folder is not HIDDEN\n";
}

// Example 3: Set the HIDDEN attribute of a folder
echo "\n";

// Set variables for setting hidden attribute
$folderPath = "test1";
$setAttribute = true;

// Set the HIDDEN attribute
echo "3. Set HIDDEN attribute of folder '$folderPath': ";
$result = SYSTEM::$folder->set_hidden($folderPath, $setAttribute);
if ($result) {
    echo "HIDDEN attribute set successfully\n";
} else {
    echo "Failed to set HIDDEN attribute\n";
}

// Example 4: Check again if folder has HIDDEN attribute
echo "\n";

// Set variables for checking hidden attribute again
$folderPath = "test1";

// Check again if folder has HIDDEN attribute
echo "4. Check again if folder '$folderPath' has HIDDEN attribute: ";
$isHidden = SYSTEM::$folder->is_hidden($folderPath);
if ($isHidden) {
    echo "Folder is HIDDEN\n";
} else {
    echo "Folder is not HIDDEN\n";
}

// Quit the application
WINDOW::$app->quit();
?>