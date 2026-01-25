<?php
// Scenario: Demonstrates generating hash for a file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Get file hash (SHA256)
echo "\n\n1. Get file hash (SHA256): ";
$filePath = "test/test_uncrypted.txt";
$hash = SYSTEM::$cryptography->hash_file($filePath);
if ($hash !== false) {
    echo "File hash generated successfully: " . $hash . "\n";
} else {
    echo "Failed to generate file hash\n";
}

// Quit the application
WINDOW::$app->quit();
?>