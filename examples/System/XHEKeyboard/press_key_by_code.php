<?php
// Scenario: Demonstrates how to press keys by their key codes

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Launch Notepad and press keys by their codes
echo "\n\n";

// Set variables for launching Notepad
$operation = "run";
$notepadPath = "C:/windows/notepad.exe";

// Launch Notepad
echo "1. Launch Notepad: ";
$result = WINDOW::$app->shell_execute($operation, $notepadPath);
if ($result) {
    echo "Notepad launched successfully\n";
} else {
    echo "Failed to launch Notepad\n";
}

// Set variables for getting Notepad window
$windowClass = "Notepad";
$exactMatch = false;
$visibleOnly = true;
$activeOnly = true;

// Get Notepad window
$notebook = WINDOW::$window->get_by_class($windowClass, $exactMatch, $visibleOnly, $activeOnly);
$notebook->foreground();
$notebook->focus();
sleep(2);

// Example 2: Press Print key by its code
echo "\n";

// Set variables for pressing Print key
$keyCode = "80";
$isAltKey = false;
$isCtrl = false;
$isAlt = true;

// Press Print key by its code
echo "2. Press Print key by code '$keyCode': ";
$result = SYSTEM::$keyboard->press_key_by_code($keyCode, $isAltKey, $isCtrl, $isAlt);
if ($result) {
    echo "Print key pressed successfully\n";
} else {
    echo "Failed to press Print key\n";
}

// Quit the application
WINDOW::$app->quit();
?>