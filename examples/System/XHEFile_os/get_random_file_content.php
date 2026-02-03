<?php
// Scenario: Demonstrates getting content of random files from a directory

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Example 1: Get content of random txt or php file from test folder
echo "\n\n1. Get content of random txt or php file from test folder: ";
$folderPath = "test";
$fileExtensions = "txt;php";
$searchSubfolders = false;
$timeout = 60;
$filePath = SYSTEM::$file_os->get_random_file_content($folderPath, $fileExtensions, $searchSubfolders, $timeout);
if ($filePath != "") {
    echo "Random file path: " . $filePath . "\n";
} else {
    echo "No files of specified types in the folder\n";
}

// Example 2: Get content of random txt file from test folder and its subfolders
echo "\n2. Get content of random txt file from test folder and its subfolders: ";
$folderPath = "test";
$fileExtensions = "txt";
$searchSubfolders = true;
$timeout = 60;
$filePath = SYSTEM::$file_os->get_random_file_content($folderPath, $fileExtensions, $searchSubfolders, $timeout);
if ($filePath != "") {
    echo "Random file path: " . $filePath . "\n";
} else {
    echo "No files of specified types in the folder and its subfolders\n";
}

// Quit the application
WINDOW::$app->quit();
?>