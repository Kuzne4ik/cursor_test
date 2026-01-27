<?php
// Scenario: Demonstrates copying, deleting, renaming, and verifying files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// Example 1: Copy a file (preparation for renaming)
echo "\n\n1. Copy file (preparation for renaming): ";
$sourceFile = "test/test1.txt";
$targetFile = "test/test_copy.txt";
$overwrite = false;
$result = SYSTEM::$file_os->copy($sourceFile, $targetFile, $overwrite);
if ($result) {
    echo "File copied successfully\n";
} else {
    echo "Failed to copy file\n";
}

// Example 2: Delete file from previous test
echo "\n2. Delete file from previous test: ";
$filePath = "test/test_rename.txt";
$result = SYSTEM::$file_os->delete($filePath);
if ($result) {
    echo "File deleted successfully\n";
} else {
    echo "Failed to delete file (file may not exist)\n";
}

// Example 3: Rename the copied file
echo "\n3. Rename the copied file: ";
$sourceFile = "test/test_copy.txt";
$targetFile = "test/test_rename.txt";
$result = SYSTEM::$file_os->rename($sourceFile, $targetFile);
if ($result) {
    echo "File renamed successfully\n";
} else {
    echo "Failed to rename file\n";
}

// Example 4: Verify that the file was renamed
echo "\n4. Verify that the file was renamed: ";
$filePath = "test/test_rename.txt";
$fileExists = SYSTEM::$file_os->is_exist($filePath);
if ($fileExists) {
    echo "File exists with new name\n";
} else {
    echo "File does not exist with new name\n";
}

// Quit the application
WINDOW::$app->quit();
?>