<?php
// Scenario: Demonstrates getting file last modification date and time

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get file last modification date
echo "\n\n1. Get file last modification date: ";
$filePath = "test/test1.txt";
$includeTime = false;
$modificationDate = SYSTEM::$file_os->get_modification_date($filePath, $includeTime);
if ($modificationDate !== false) {
    echo "File last modification date: " . $modificationDate . "\n";
} else {
    echo "Failed to get file last modification date\n";
}

// Example 2: Get file last modification time
echo "\n2. Get file last modification time: ";
$filePath = "test/test1.txt";
$includeTime = true;
$modificationTime = SYSTEM::$file_os->get_modification_date($filePath, $includeTime);
if ($modificationTime !== false) {
    echo "File last modification time: " . $modificationTime . "\n";
} else {
    echo "Failed to get file last modification time\n";
}

// Example 3: Try to get last modification date of non-existent file
echo "\n3. Get last modification date of non-existent file: ";
$filePath = "test/test211.txt";
$includeTime = false;
$modificationDate = SYSTEM::$file_os->get_modification_date($filePath, $includeTime);
if (!$modificationDate) {
    echo "File does not exist\n";
} else {
    echo "File last modification date: " . $modificationDate . "\n";
}

// Quit the application
WINDOW::$app->quit();
?>