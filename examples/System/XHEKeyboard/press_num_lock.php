<?php
// Scenario: Demonstrates how to press the NUM LOCK key and check its state

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Press NUM LOCK key
echo "\n\n";

// Press NUM LOCK key
echo "1. Press NUM LOCK key: ";
$result = SYSTEM::$keyboard->press_num_lock();
if ($result) {
    echo "NUM LOCK pressed successfully\n";
} else {
    echo "Failed to press NUM LOCK\n";
}

// Example 2: Check if NUM LOCK is pressed
echo "\n";

// Check if NUM LOCK is pressed
echo "2. Check if NUM LOCK is pressed: ";
$isPressed = SYSTEM::$keyboard->is_num_lock_pressed();
if ($isPressed) {
    echo "NUM LOCK is pressed\n";
} else {
    echo "NUM LOCK is not pressed\n";
}

// Pause for 2 seconds
sleep(2);

// Example 3: Press NUM LOCK key again
echo "\n";

// Press NUM LOCK key again
echo "3. Press NUM LOCK key again: ";
$result = SYSTEM::$keyboard->press_num_lock();
if ($result) {
    echo "NUM LOCK pressed successfully\n";
} else {
    echo "Failed to press NUM LOCK\n";
}

// Example 4: Check if NUM LOCK is pressed again
echo "\n";

// Check if NUM LOCK is pressed again
echo "4. Check if NUM LOCK is pressed again: ";
$isPressed = SYSTEM::$keyboard->is_num_lock_pressed();
if ($isPressed) {
    echo "NUM LOCK is pressed\n";
} else {
    echo "NUM LOCK is not pressed\n";
}

// Quit the application
WINDOW::$app->quit();
?>