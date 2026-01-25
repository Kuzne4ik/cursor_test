<?php
// Scenario: Demonstrates generating TOTP (Time-based One-Time Password)

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Generate TOTP by key
echo "\n\n1. Generate TOTP by key: ";
$secretKey = "5OHUP3J6CN4O4U3H4HWWIBLLH2Y2FJP2";
$totp = SYSTEM::$cryptography->get_totp($secretKey);
if ($totp !== false) {
    echo "TOTP generated successfully: " . $totp . "\n";
} else {
    echo "Failed to generate TOTP\n";
}

// Quit the application
WINDOW::$app->quit();
?>