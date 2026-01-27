<?php
// Scenario: Demonstrates getting file creation date and time

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// Example 1: Get file creation date
echo "\n\n1. Get file creation date: ";
$filePath = "test/test1.txt";
$includeTime = false;
$creationDate = SYSTEM::$file_os->get_creation_date($filePath, $includeTime);
if ($creationDate !== false) {
    echo "File creation date: " . $creationDate . "\n";
} else {
    echo "Failed to get file creation date\n";
}

// Example 2: Get file creation time
echo "\n2. Get file creation time: ";
$filePath = "test/test1.txt";
$includeTime = true;
$creationTime = SYSTEM::$file_os->get_creation_date($filePath, $includeTime);
if ($creationTime !== false) {
    echo "File creation time: " . $creationTime . "\n";
} else {
    echo "Failed to get file creation time\n";
}

// Example 3: Try to get creation date of non-existent file
echo "\n3. Get creation date of non-existent file: ";
$filePath = "test/test11.txt";
$includeTime = false;
$creationDate = SYSTEM::$file_os->get_creation_date($filePath, $includeTime);
if (!$creationDate) {
    echo "File does not exist\n";
} else {
    echo "File creation date: " . $creationDate . "\n";
}

// Quit the application
WINDOW::$app->quit();
?>