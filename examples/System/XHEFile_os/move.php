<?php
// Scenario: Demonstrates copying, moving, and verifying files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Copy a file (preparation for moving)
echo "\n\n1. Copy file (preparation for moving): ";
$sourceFile = "test/test1.txt";
$targetFile = "test/test_copy.txt";
$overwrite = false;
$result = SYSTEM::$file_os->copy($sourceFile, $targetFile, $overwrite);
if ($result) {
    echo "File copied successfully\n";
} else {
    echo "Failed to copy file\n";
}

// Example 2: Move the copied file
echo "\n2. Move the copied file: ";
$sourceFile = "test/test_copy.txt";
$targetFile = "test/test_move.txt";
$overwrite = false;
$result = SYSTEM::$file_os->move($sourceFile, $targetFile, $overwrite);
if ($result) {
    echo "File moved successfully\n";
} else {
    echo "Failed to move file\n";
}

// Example 3: Verify that the file was moved
echo "\n3. Verify that the file was moved: ";
$filePath = "test/test_move.txt";
$fileExists = SYSTEM::$file_os->is_exist($filePath);
if ($fileExists) {
    echo "File exists at new location\n";
} else {
    echo "File does not exist at new location\n";
}

// Quit the application
WINDOW::$app->quit();
?>