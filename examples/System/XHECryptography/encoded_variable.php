<?php
// Scenario: Demonstrates working with encoded variables and strings. Encoded variables are created and edited in the application's "Security Manager".

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

$bUTF8Ver = true;
$PHP_Use_Trought_Shell = true;

// Example 1: Encoded string with key
echo "\n2. Encoded string with key: ";
$encodedString = "PmpBtuDawGU=";
$key = "123";
$v = new EncodedString($encodedString, $key);
echo $v;
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>