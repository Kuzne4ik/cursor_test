<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Send key down events to Notepad application

// Step: Get the Notepad window interface
$windowClass = "Notepad";
$visibly = false;
$mainWindow = true;
$childWindow = true;
$notepadWindow = WINDOW::$window->get_by_class($windowClass, $visibly, $mainWindow, $childWindow);

// Step: Get the text area (first child element)
$childNumber = 0;
$notebook = $notepadWindow->get_child_by_number($childNumber);

// Step: Bring Notepad to foreground and set focus
$foregroundResult = $notebook->foreground();
if ($foregroundResult) {
    echo "Notepad brought to foreground successfully\n";
} else {
    echo "Failed to bring Notepad to foreground\n";
}

$focusResult = $notebook->focus();
if ($focusResult) {
    echo "Focus set to Notepad text area successfully\n";
} else {
    echo "Failed to set focus to Notepad text area\n";
}

// Example 1: Press Enter key using send_key_down
echo "Example 1: Press Enter key using send_key_down\n";
$enterKeyCode = "13";
$sendKeyDownResult1 = $notebook->send_key_down($enterKeyCode);
if ($sendKeyDownResult1) {
    echo "Enter key down event sent successfully\n";
} else {
    echo "Failed to send Enter key down event\n";
}

// Example 2: Press 'a' key using send_key_down
echo "Example 2: Press 'a' key using send_key_down\n";
$aKeyCode = "65";
$sendKeyDownResult2 = $notebook->send_key_down($aKeyCode);
if ($sendKeyDownResult2) {
    echo "'a' key down event sent successfully\n";
} else {
    echo "Failed to send 'a' key down event\n";
}

// Example 3: Press Enter key again using send_key_down
echo "Example 3: Press Enter key again using send_key_down\n";
$sendKeyDownResult3 = $notebook->send_key_down($enterKeyCode);
if ($sendKeyDownResult3) {
    echo "Enter key down event sent successfully\n";
} else {
    echo "Failed to send Enter key down event\n";
}

// Quit the application
WINDOW::$app->quit();
?>