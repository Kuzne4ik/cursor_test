<?php
// Scenario: Demonstrates getting file last access date and time

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get file last access date
echo "\n\n1. Get file last access date: ";
$filePath = "test/test1.txt";
$includeTime = false;
$lastAccessDate = SYSTEM::$file_os->get_lastacess_date($filePath, $includeTime);
if ($lastAccessDate !== false) {
    echo "File last access date: " . $lastAccessDate . "\n";
} else {
    echo "Failed to get file last access date\n";
}

// Example 2: Get file last access time
echo "\n2. Get file last access time: ";
$filePath = "test/test1.txt";
$includeTime = true;
$lastAccessTime = SYSTEM::$file_os->get_lastacess_date($filePath, $includeTime);
if ($lastAccessTime !== false) {
    echo "File last access time: " . $lastAccessTime . "\n";
} else {
    echo "Failed to get file last access time\n";
}

// Example 3: Try to get last access date of non-existent file
echo "\n3. Get last access date of non-existent file: ";
$filePath = "test/test123.txt";
$includeTime = false;
$lastAccessDate = SYSTEM::$file_os->get_lastacess_date($filePath, $includeTime);
if (!$lastAccessDate) {
    echo "File does not exist\n";
} else {
    echo "File last access date: " . $lastAccessDate . "\n";
}

// Quit the application
WINDOW::$app->quit();
?>