<?php
// Scenario: Demonstrates how to create a RAR archive of a folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Create a RAR archive of a folder
echo "\n\n";

// Set variables for creating RAR archive
$folderPath = "test1";

// Create RAR archive of the folder
echo "1. Create RAR archive of folder '$folderPath': ";
$result = SYSTEM::$folder->rar($folderPath);
if ($result) {
    echo "RAR archive created successfully\n";
} else {
    echo "Failed to create RAR archive\n";
}

// Quit the application
WINDOW::$app->quit();
?>