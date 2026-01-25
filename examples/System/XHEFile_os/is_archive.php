<?php
// Scenario: Demonstrates checking and setting archive attribute for files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Check archive attribute for file
echo "\n\n1. Check archive attribute for file: ";
$filePath = "test/test1.txt";
$isArchive = SYSTEM::$file_os->is_archive($filePath);
if ($isArchive) {
    echo "File has archive attribute\n";
} else {
    echo "File does not have archive attribute\n";
}

// Example 2: Remove archive attribute from file
echo "\n2. Remove archive attribute from file: ";
$filePath = "test/test1.txt";
$setArchive = false;
$result = SYSTEM::$file_os->set_archive($filePath, $setArchive);
if ($result) {
    echo "Archive attribute removed successfully\n";
} else {
    echo "Failed to remove archive attribute\n";
}

// Example 3: Check archive attribute again
echo "\n3. Check archive attribute again: ";
$filePath = "test/test1.txt";
$isArchive = SYSTEM::$file_os->is_archive($filePath);
if (!$isArchive) {
    echo "File does not have archive attribute\n";
} else {
    echo "File has archive attribute\n";
}

// Example 4: Set archive attribute for file
echo "\n4. Set archive attribute for file: ";
$filePath = "test/test1.txt";
$setArchive = true;
$result = SYSTEM::$file_os->set_archive($filePath, $setArchive);
if ($result) {
    echo "Archive attribute set successfully\n";
} else {
    echo "Failed to set archive attribute\n";
}

// Quit the application
WINDOW::$app->quit();
?>