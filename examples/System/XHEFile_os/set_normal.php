<?php
// Scenario: Demonstrates checking and setting normal attribute for files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Check normal attribute for file
echo "\n\n1. Check normal attribute for file: ";
$filePath = "test/test1.txt";
$isNormal = SYSTEM::$file_os->is_normal($filePath);
if ($isNormal) {
    echo "File has normal attribute\n";
} else {
    echo "File does not have normal attribute\n";
}

// Example 2: Remove normal attribute from file
echo "\n2. Remove normal attribute from file: ";
$filePath = "test/test1.txt";
$setNormal = false;
$result = SYSTEM::$file_os->set_normal($filePath, $setNormal);
if ($result) {
    echo "Normal attribute removed successfully\n";
} else {
    echo "Failed to remove normal attribute\n";
}

// Example 3: Check normal attribute again
echo "\n3. Check normal attribute again: ";
$filePath = "test/test1.txt";
$isNormal = SYSTEM::$file_os->is_normal($filePath);
if (!$isNormal) {
    echo "File does not have normal attribute\n";
} else {
    echo "File has normal attribute\n";
}

// Example 4: Set normal attribute for file
echo "\n4. Set normal attribute for file: ";
$filePath = "test/test1.txt";
$setNormal = true;
$result = SYSTEM::$file_os->set_normal($filePath, $setNormal);
if ($result) {
    echo "Normal attribute set successfully\n";
} else {
    echo "Failed to set normal attribute\n";
}

// Quit the application
WINDOW::$app->quit();
?>