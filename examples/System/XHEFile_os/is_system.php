<?php
// Scenario: Demonstrates checking and setting system attribute for files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Check system attribute for file
echo "\n\n1. Check system attribute for file: ";
$filePath = "test/test1.txt";
$isSystem = SYSTEM::$file_os->is_system($filePath);
if ($isSystem) {
    echo "File has system attribute\n";
} else {
    echo "File does not have system attribute\n";
}

// Example 2: Remove system attribute from file
echo "\n2. Remove system attribute from file: ";
$filePath = "test/test1.txt";
$setSystem = false;
$result = SYSTEM::$file_os->set_system($filePath, $setSystem);
if ($result) {
    echo "System attribute removed successfully\n";
} else {
    echo "Failed to remove system attribute\n";
}

// Example 3: Check system attribute again
echo "\n3. Check system attribute again: ";
$filePath = "test/test1.txt";
$isSystem = SYSTEM::$file_os->is_system($filePath);
if (!$isSystem) {
    echo "File does not have system attribute\n";
} else {
    echo "File has system attribute\n";
}

// Example 4: Set system attribute for file
echo "\n4. Set system attribute for file: ";
$filePath = "test/test1.txt";
$setSystem = true;
$result = SYSTEM::$file_os->set_system($filePath, $setSystem);
if ($result) {
    echo "System attribute set successfully\n";
} else {
    echo "Failed to set system attribute\n";
}

// Quit the application
WINDOW::$app->quit();
?>