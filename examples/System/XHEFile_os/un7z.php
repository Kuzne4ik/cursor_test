<?php
// Scenario: Demonstrates extracting files from a 7z archive

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >file_os->" . basename (__FILE__) . "</span>\n";

// Clear the unzipped folder
$folderPath = "test/unzipped";
SYSTEM::$folder->delete($folderPath);

// Example 1: Extract 7z archive
echo "\n\n1. Extract 7z archive: ";
$archivePath = "test/test1.txt.zip";
$targetPath = "test/unzipped";
$result = SYSTEM::$file_os->un7z($archivePath, $targetPath);
if ($result) {
    echo "Archive extracted successfully\n";
} else {
    echo "Failed to extract archive\n";
}

// Quit the application
WINDOW::$app->quit();
?>