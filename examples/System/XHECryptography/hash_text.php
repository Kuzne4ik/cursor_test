<?php
// Scenario: Demonstrates generating hash for a text

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// Example 1: Get text hash
echo "\n\n1. Get text hash: ";
$text = "some text";
$hash = SYSTEM::$cryptography->hash_text($text);
if ($hash !== false) {
    echo "Text hash generated successfully: " . $hash . "\n";
} else {
    echo "Failed to generate text hash\n";
}

// Quit the application
WINDOW::$app->quit();
?>