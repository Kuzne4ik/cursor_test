<?php
// Scenario: Demonstrates getting folder information from file paths

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Get folder from relative path
echo "\n\n1. Get folder from relative path: ";
$filePath = "test/test1.txt";
$folderPath = SYSTEM::$file_os->get_folder($filePath);
if ($folderPath !== false) {
    echo "Folder path: " . $folderPath . "\n";
} else {
    echo "Failed to get folder path\n";
}

// Example 2: Get folder from absolute path
echo "\n2. Get folder from absolute path: ";
$programPath = WINDOW::$app->get_program_path();
$folderPath = SYSTEM::$file_os->get_folder($programPath);
if ($folderPath !== false) {
    echo "Folder path: " . $folderPath . "\n";
} else {
    echo "Failed to get folder path\n";
}

// Example 3: Get full folder path from absolute path
echo "\n3. Get full folder path from absolute path: ";
$programPath = WINDOW::$app->get_program_path();
$folderLevel = -1;
$folderPath = SYSTEM::$file_os->get_folder($programPath, $folderLevel);
if ($folderPath !== false) {
    echo "Folder path: " . $folderPath . "\n";
} else {
    echo "Failed to get folder path\n";
}

// Example 4: Get last 2 folders from absolute path
echo "\n4. Get last 2 folders from absolute path: ";
$programPath = WINDOW::$app->get_program_path();
$folderLevel = 1;
$folderPath = SYSTEM::$file_os->get_folder($programPath, $folderLevel);
if ($folderPath !== false) {
    echo "Folder path: " . $folderPath . "\n";
} else {
    echo "Failed to get folder path\n";
}

// Quit the application
WINDOW::$app->quit();
?>