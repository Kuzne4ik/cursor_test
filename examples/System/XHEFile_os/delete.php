<?php
// Scenario: Demonstrates copying and deleting files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}


// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Copy a file (preparation for deletion)
echo "\n\n1. Copy file (preparation for deletion): ";
$sourceFile = "test/test1.txt";
$targetFile = "test/for_delete_copy.txt";
$overwrite = false;
$result = SYSTEM::$file_os->copy($sourceFile, $targetFile, $overwrite);
if ($result) {
    echo "File copied successfully\n";
} else {
    echo "Failed to copy file\n";
}

// Example 2: Delete the copied file
echo "\n2. Delete file: ";
$filePath = "test/for_delete_copy.txt";
$result = SYSTEM::$file_os->delete($filePath);
if ($result) {
    echo "File deleted successfully\n";
} else {
    echo "Failed to delete file\n";
}

// Quit the application
WINDOW::$app->quit();
?>