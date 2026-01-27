<?php
// Scenario: Demonstrates how to check if CAPS LOCK key is pressed and how to press it

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Check if CAPS LOCK is pressed
echo "1. Check if CAPS LOCK is pressed: ";
$isPressed = SYSTEM::$keyboard->is_caps_lock_pressed();
if ($isPressed) {
    echo "CAPS LOCK is pressed\n";
} else {
    echo "CAPS LOCK is not pressed\n";
}

// Quit the application
WINDOW::$app->quit();
?>