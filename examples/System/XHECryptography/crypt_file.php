<?php
// Scenario: Demonstrates file encryption and decryption using a password

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}

// Example 1: Encrypt a file
echo "\n\n1. Encrypt file: ";
$sourceFile = "test/test.txt";
$targetFile = "test/test.crypted";
$password = "q12345!";
$result = SYSTEM::$cryptography->crypt_file($sourceFile, $targetFile, $password);
if ($result) {
    echo "File encrypted successfully\n";
} else {
    echo "Failed to encrypt file\n";
}

// Example 2: Decrypt the file
echo "\n2. Decrypt file: ";
$sourceFile = "test/test.crypted";
$targetFile = "test/test_uncrypted.txt";
$password = "q12345!";
$result = SYSTEM::$cryptography->uncrypt_file($sourceFile, $targetFile, $password);
if ($result) {
    echo "File decrypted successfully\n";
} else {
    echo "Failed to decrypt file\n";
}

// Example 3: Read the decrypted file content
echo "\n3. Read decrypted file content: ";
$filePath = "test/test_uncrypted.txt";
$content = SYSTEM::$textfile->read_file($filePath);
echo $content;

// Quit the application
WINDOW::$app->quit();
?>