<?php
// Scenario: Demonstrates how to press the CAPS LOCK key and check its state

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path="../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >keyboard->" . basename (__FILE__) . "</span>\n";

// Example 1: Press CAPS LOCK key
echo "\n\n";

// Press CAPS LOCK key
echo "1. Press CAPS LOCK key: ";
$result = SYSTEM::$keyboard->press_caps_lock();
if ($result) {
    echo "CAPS LOCK pressed successfully\n";
} else {
    echo "Failed to press CAPS LOCK\n";
}

// Check if CAPS LOCK is pressed
echo "\n";

// Check if CAPS LOCK is pressed
echo "Check if CAPS LOCK is pressed: ";
$isPressed = SYSTEM::$keyboard->is_caps_lock_pressed();
if ($isPressed) {
    echo "CAPS LOCK is pressed\n";
} else {
    echo "CAPS LOCK is not pressed\n";
}

sleep(1);

// Example 2: Press CAPS LOCK key again
echo "\n";

// Press CAPS LOCK key again
echo "2. Press CAPS LOCK key again: ";
$result = SYSTEM::$keyboard->press_caps_lock();
if ($result) {
    echo "CAPS LOCK pressed successfully\n";
} else {
    echo "Failed to press CAPS LOCK\n";
}

// Check if CAPS LOCK is pressed again
echo "Check if CAPS LOCK is pressed again: ";
$isPressed = SYSTEM::$keyboard->is_caps_lock_pressed();
if ($isPressed) {
    echo "CAPS LOCK is pressed\n";
} else {
    echo "CAPS LOCK is not pressed\n";
}

// Quit the application
WINDOW::$app->quit();
?>