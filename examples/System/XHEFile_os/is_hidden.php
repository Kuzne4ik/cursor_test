<?php
// Scenario: Demonstrates checking and setting hidden attribute for files

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Check hidden attribute for file
echo "\n\n1. Check hidden attribute for file: ";
$filePath = "test/test1.txt";
$isHidden = SYSTEM::$file_os->is_hidden($filePath);
if ($isHidden) {
    echo "File has hidden attribute\n";
} else {
    echo "File does not have hidden attribute\n";
}

// Example 2: Remove hidden attribute from file
echo "\n2. Remove hidden attribute from file: ";
$filePath = "test/test1.txt";
$setHidden = false;
$result = SYSTEM::$file_os->set_hidden($filePath, $setHidden);
if ($result) {
    echo "Hidden attribute removed successfully\n";
} else {
    echo "Failed to remove hidden attribute\n";
}

// Example 3: Check hidden attribute again
echo "\n3. Check hidden attribute again: ";
$filePath = "test/test1.txt";
$isHidden = SYSTEM::$file_os->is_hidden($filePath);
if (!$isHidden) {
    echo "File does not have hidden attribute\n";
} else {
    echo "File has hidden attribute\n";
}

// Example 4: Set hidden attribute for file
echo "\n4. Set hidden attribute for file: ";
$filePath = "test/test1.txt";
$setHidden = true;
$result = SYSTEM::$file_os->set_hidden($filePath, $setHidden);
if ($result) {
    echo "Hidden attribute set successfully\n";
} else {
    echo "Failed to set hidden attribute\n";
}

// Quit the application
WINDOW::$app->quit();
?>