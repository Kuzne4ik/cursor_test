<?php
// Scenario: Demonstrates how to set and use Ctrl key prefix for keyboard operations

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path="../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >keyboard->" . basename (__FILE__) . "</span>\n";

// Example 1: Navigate to a webpage
echo "\n\n";

// Set variables for navigation
$url = "http://ya.ru";

// Navigate to the webpage
echo "1. Navigate to '$url': ";
$result = WEB::$browser->navigate($url);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

// Example 2: Set Ctrl prefix
echo "\n";

// Set variables for setting Ctrl prefix
$enable = true;

// Set Ctrl prefix
echo "2. Set Ctrl prefix to $enable: ";
$result = SYSTEM::$keyboard->set_ctrl_prefix($enable);
if ($result) {
    echo "Ctrl prefix set successfully\n";
} else {
    echo "Failed to set Ctrl prefix\n";
}

// Example 3: Set focus on input field
echo "\n";

// Set variables for setting focus
$inputNumber = 0;

// Set focus on input field
echo "3. Set focus on input field number $inputNumber: ";
$result = DOM::$input->set_focus_by_number($inputNumber);
if ($result) {
    echo "Focus set successfully\n";
} else {
    echo "Failed to set focus\n";
}

// Example 4: Send Ctrl+A (select all)
echo "\n";

// Set variables for sending Ctrl+A
$keyCode = "65"; // A key code

// Send Ctrl+A (select all)
echo "4. Send Ctrl+A (select all): ";
$result = SYSTEM::$keyboard->send_key($keyCode, false, true);
if ($result) {
    echo "Ctrl+A sent successfully\n";
} else {
    echo "Failed to send Ctrl+A\n";
}

sleep(2);

// Example 5: Send Ctrl+C (copy)
echo "\n";

// Set variables for sending Ctrl+C
$keyCode = "67"; // C key code

// Send Ctrl+C (copy)
echo "5. Send Ctrl+C (copy): ";
$result = SYSTEM::$keyboard->send_key($keyCode, false, true);
if ($result) {
    echo "Ctrl+C sent successfully\n";
} else {
    echo "Failed to send Ctrl+C\n";
}

sleep(2);

// Example 6: Get text from clipboard
echo "\n";

// Get text from clipboard
echo "6. Get text from clipboard: ";
$clipboardText = SYSTEM::$clipboard->get_text();
if ($clipboardText !== false) {
    echo "Clipboard text: $clipboardText\n";
} else {
    echo "Failed to get clipboard text\n";
}

// Example 7: Send Ctrl+V (paste)
echo "\n";

// Set variables for sending Ctrl+V
$keyCode = "86"; // V key code

// Send Ctrl+V (paste)
echo "7. Send Ctrl+V (paste): ";
$result = SYSTEM::$keyboard->send_key($keyCode, false, true);
if ($result) {
    echo "Ctrl+V sent successfully\n";
} else {
    echo "Failed to send Ctrl+V\n";
}

sleep(2);

// Example 8: Disable Ctrl prefix
echo "\n";

// Set variables for disabling Ctrl prefix
$enable = false;

// Disable Ctrl prefix
echo "8. Disable Ctrl prefix: ";
$result = SYSTEM::$keyboard->set_ctrl_prefix($enable);
if ($result) {
    echo "Ctrl prefix disabled successfully\n";
} else {
    echo "Failed to disable Ctrl prefix\n";
}

// Quit the application
WINDOW::$app->quit();
?>