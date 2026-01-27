<?php
// Scenario: Demonstrates how to press the SCROLL LOCK key and check its state

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Press SCROLL LOCK key
echo "\n\n";

// Press SCROLL LOCK key
echo "1. Press SCROLL LOCK key: ";
$result = SYSTEM::$keyboard->press_scroll_lock();
if ($result) {
    echo "SCROLL LOCK pressed successfully\n";
} else {
    echo "Failed to press SCROLL LOCK\n";
}

// Check if SCROLL LOCK is pressed
echo "\n";

// Check if SCROLL LOCK is pressed
echo "Check if SCROLL LOCK is pressed: ";
$isPressed = SYSTEM::$keyboard->is_scroll_lock_pressed();
if ($isPressed) {
    echo "SCROLL LOCK is pressed\n";
} else {
    echo "SCROLL LOCK is not pressed\n";
}

// Pause for 2 seconds
sleep(2);

// Example 2: Press SCROLL LOCK key again
echo "\n";

// Press SCROLL LOCK key again
echo "2. Press SCROLL LOCK key again: ";
$result = SYSTEM::$keyboard->press_scroll_lock();
if ($result) {
    echo "SCROLL LOCK pressed successfully\n";
} else {
    echo "Failed to press SCROLL LOCK\n";
}

// Check if SCROLL LOCK is pressed again
echo "\n";

// Check if SCROLL LOCK is pressed again
echo "Check if SCROLL LOCK is pressed again: ";
$isPressed = SYSTEM::$keyboard->is_scroll_lock_pressed();
if ($isPressed) {
    echo "SCROLL LOCK is pressed\n";
} else {
    echo "SCROLL LOCK is not pressed\n";
}

// Quit the application
WINDOW::$app->quit();
?>