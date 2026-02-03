<?php
// Scenario: Demonstrates how to emulate key presses including special keys and key combinations

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path="../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >keyboard->" . basename (__FILE__) . "</span>\n";

// Open Notepad application for key input demonstration
$windowClass = "Notepad";
$exactMatch = false;
$visibleOnly = true;
$activeOnly = true;

// Get Notepad window
echo "Get Notepad window: ";
$notebook = WINDOW::$window->get_by_class($windowClass, $exactMatch, $visibleOnly, $activeOnly);
if ($notebook->inner_number == -1) {
    echo "Notepad application needs to be launched\n";
    
    // Set variables for launching Notepad
    $operation = "open";
    $notepadPath = "C:/Windows/system32/notepad.exe";
    
    // Launch Notepad
    echo "Launch Notepad application: ";
    WINDOW::$app->shell_execute($operation, $notepadPath);
    sleep(5);
    
    // Get Notepad window again
    $notebook = WINDOW::$window->get_by_class($windowClass, $exactMatch, $visibleOnly, $activeOnly);
}

// Bring Notepad to foreground and set focus
$notebook->foreground();
$notebook->focus();

echo("\n");

// Example 1: Emulate space key press by Alt code
$keyCode = VK_SPACE;
$isAltKey = true;

// Emulate space key press by Alt code
echo "1. Emulate space key press by Alt code: ";
$result = SYSTEM::$keyboard->key($keyCode, $isAltKey);
if ($result) {
    echo "Space key pressed successfully\n";
} else {
    echo "Failed to press space key\n";
}

echo("\n");

// Example 2: Emulate space key press directly
$keyChar = ' ';
$isAltKey = false;

// Emulate space key press directly
echo "3. Emulate space key press directly: ";
$result = SYSTEM::$keyboard->key($keyChar, $isAltKey);
if ($result) {
    echo "Space key pressed successfully\n";
} else {
    echo "Failed to press space key\n";
}

echo("\n");

// Example 3: Set keyboard language to English
$language = 'en';

// Set keyboard language to English
echo "3. Set keyboard language to '$language': ";
$result = SYSTEM::$keyboard->set_current_language($language);
if ($result) {
    echo "Language set successfully\n";
} else {
    echo "Failed to set language\n";
}

echo("\n");

// Example 4: Emulate 'a' key press
$keyChar = "a";
$isAltKey = false;

// Emulate 'a' key press
echo "4. Emulate '$keyChar' key press: ";
$result = SYSTEM::$keyboard->key($keyChar, $isAltKey);
if ($result) {
    echo "Key pressed successfully\n";
} else {
    echo "Failed to press key\n";
}

echo("\n");

// Example 5: Emulate 'b' key down/up sequence
$keyChar = "b";
$isAltKey = false;

// Emulate 'b' key down/up sequence
echo "5. Emulate '$keyChar' key down/up sequence: ";
$result1 = SYSTEM::$keyboard->key_down($keyChar, $isAltKey);
$result2 = SYSTEM::$keyboard->key_up($keyChar, $isAltKey);
if ($result1 && $result2) {
    echo "Key sequence successful\n";
} else {
    echo "Failed to complete key sequence\n";
}

echo("\n");

// Example 6: Emulate Enter key press by Alt code (carriage return)
$keyCode = VK_ENTER;
$isAltKey = true;

// Emulate Enter key press by Alt code
echo "6. Emulate Enter key press by Alt code: ";
$result = SYSTEM::$keyboard->key($keyCode, $isAltKey);
if ($result) {
    echo "Enter key pressed successfully\n";
} else {
    echo "Failed to press Enter key\n";
}

// Set keyboard language to Russian to input multiple Cyrillic characters
$language = 'ru';

// Set keyboard language to Russian
echo "Set keyboard language to '$language': ";
$result = SYSTEM::$keyboard->set_current_language($language);
if ($result) {
    echo "Language set successfully\n";
} else {
    echo "Failed to set language\n";
}

echo("\n");

// Example 7: Input multiple Cyrillic characters
$text = "Буквы и цифры 1";
$delay = "20:40";

// Input multiple Cyrillic characters
echo "7. Input multiple Cyrillic characters: ";
$result = SYSTEM::$keyboard->input($text, $delay);
if ($result) {
    echo "Text input successful\n";
} else {
    echo "Failed to input text\n";
}

// Quit the application
WINDOW::$app->quit();
?>