<?php
// Scenario: Demonstrates generating HOTP (HMAC-based One-Time Password)

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Example 1: Generate HOTP by key
echo "\n\n1. Generate HOTP by key: ";
$secretKey = "5OHUP3J6CN4O4U3H4HWWIBLLH2Y2FJP2";
$counter = 5;
$hotp = SYSTEM::$cryptography->get_hotp($secretKey, $counter);
if ($hotp !== false) {
    echo "HOTP generated successfully: " . $hotp . "\n";
} else {
    echo "Failed to generate HOTP\n";
}

// Quit the application
WINDOW::$app->quit();
?>