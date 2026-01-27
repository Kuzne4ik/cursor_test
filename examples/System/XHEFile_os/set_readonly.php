<?php
// Scenario: Demonstrates checking and setting readonly attribute for files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>file_os->" . basename (__FILE__) . "</font>\n";

// Example 1: Check readonly attribute for file
echo "\n\n1. Check readonly attribute for file: ";
$filePath = "test/test1.txt";
$isReadonly = SYSTEM::$file_os->is_readonly($filePath);
if ($isReadonly) {
    echo "File has readonly attribute\n";
} else {
    echo "File does not have readonly attribute\n";
}

// Example 2: Remove readonly attribute from file
echo "\n2. Remove readonly attribute from file: ";
$filePath = "test/test1.txt";
$setReadonly = false;
$result = SYSTEM::$file_os->set_readonly($filePath, $setReadonly);
if ($result) {
    echo "Readonly attribute removed successfully\n";
} else {
    echo "Failed to remove readonly attribute\n";
}

// Example 3: Check readonly attribute again
echo "\n3. Check readonly attribute again: ";
$filePath = "test/test1.txt";
$isReadonly = SYSTEM::$file_os->is_readonly($filePath);
if (!$isReadonly) {
    echo "File does not have readonly attribute\n";
} else {
    echo "File has readonly attribute\n";
}

// Example 4: Set readonly attribute for file
echo "\n4. Set readonly attribute for file: ";
$filePath = "test/test1.txt";
$setReadonly = true;
$result = SYSTEM::$file_os->set_readonly($filePath, $setReadonly);
if ($result) {
    echo "Readonly attribute set successfully\n";
} else {
    echo "Failed to set readonly attribute\n";
}

// Quit the application
WINDOW::$app->quit();
?>