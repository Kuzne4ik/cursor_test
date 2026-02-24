<?php
// Scenario: Demonstrates how to send key down events to a UI element

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Open Notepad for key input demonstration
$notepadPath = "C:\\Windows\\System32\\notepad.exe";
WINDOW::$app->shell_execute("open", $notepadPath);
sleep(2);

// Step: Get Notepad UI element
$notepadWindow = WINDOW::$window->get_by_class("Notepad", false, true, true);
$notepadUI = $notepadWindow->get_ui();
$notepadElement = $notepadUI->get_child(0);

// Step: Set focus to Notepad
$notepadElement->focus();

// Example 1: Send Enter key down
$enterKeyCode = "13";
$result1 = $notepadElement->send_key_down($enterKeyCode);

if ($result1) {
    echo("Example 1: Successfully sent Enter key down\n");
} else {
    echo("Example 1: Failed to send Enter key down\n");
}

// Step: Send 'a' key down
$letterAKeyCode = "65";
$result2 = $notepadElement->send_key_down($letterAKeyCode);

if ($result2) {
    echo("Example 2: Successfully sent 'a' key down\n");
} else {
    echo("Example 2: Failed to send 'a' key down\n");
}

// Step: Send Enter key down again
$result3 = $notepadElement->send_key_down($enterKeyCode);

if ($result3) {
    echo("Example 3: Successfully sent Enter key down\n");
} else {
    echo("Example 3: Failed to send Enter key down\n");
}

// Quit the application
WINDOW::$app->quit();
?>