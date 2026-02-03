<?php
// Scenario: Demonstrates text decryption using a password

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// Example 1: Encrypt text (preparation for decryption)
echo "\n\n1. Encrypt text: ";
$text = "some text";
$password = "q12345!";
$codedText = SYSTEM::$cryptography->crypt_text($text, $password);
if ($codedText !== false) {
    echo "Text encrypted successfully\n";
} else {
    echo "Failed to encrypt text\n";
}

// Example 2: Decrypt text
echo "\n2. Decrypt text: ";
$password = "q12345!";
$decryptedText = SYSTEM::$cryptography->uncrypt_text($codedText, $password);
if ($decryptedText !== false) {
    echo "Text decrypted successfully: " . $decryptedText . "\n";
} else {
    echo "Failed to decrypt text\n";
}

// Quit the application
WINDOW::$app->quit();
?>