<?php
// Scenario: Demonstrates how to check if SCROLL LOCK key is pressed and how to press it

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Check if SCROLL LOCK is pressed
echo "1. Check if SCROLL LOCK is pressed: ";
$isPressed = SYSTEM::$keyboard->is_scroll_lock_pressed();
if ($isPressed) {
    echo "SCROLL LOCK is pressed\n";
} else {
    echo "SCROLL LOCK is not pressed\n";
}

// Quit the application
WINDOW::$app->quit();
?>