<?php
// Scenario: Demonstrates how to set and use Shift key prefix for keyboard operations

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

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

// Example 2: Set Shift prefix
echo "\n";

// Set variables for setting Shift prefix
$enable = true;

// Set Shift prefix
echo "2. Set Shift prefix to $enable: ";
$result = SYSTEM::$keyboard->set_shift_prefix($enable);
if ($result) {
    echo "Shift prefix set successfully\n";
} else {
    echo "Failed to set Shift prefix\n";
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

// Example 4: Send Shift+Home (select text to beginning)
echo "\n";

// Set variables for sending Shift+Home
$keyCode = "36"; // Home key code

// Send Shift+Home (select text to beginning)
echo "4. Send Shift+Home (select text to beginning): ";
$result = SYSTEM::$keyboard->send_key($keyCode, false, false, false, true);
if ($result) {
    echo "Shift+Home sent successfully\n";
} else {
    echo "Failed to send Shift+Home\n";
}

sleep(2);

// Example 5: Send Shift+End (select text to end)
echo "\n";

// Set variables for sending Shift+End
$keyCode = "35"; // End key code

// Send Shift+End (select text to end)
echo "5. Send Shift+End (select text to end): ";
$result = SYSTEM::$keyboard->send_key($keyCode, false, false, false, true);
if ($result) {
    echo "Shift+End sent successfully\n";
} else {
    echo "Failed to send Shift+End\n";
}

sleep(2);

// Example 6: Send Shift+Insert (paste)
echo "\n";

// Set variables for sending Shift+Insert
$keyCode = "45"; // Insert key code

// Send Shift+Insert (paste)
echo "6. Send Shift+Insert (paste): ";
$result = SYSTEM::$keyboard->send_key($keyCode, false, false, false, true);
if ($result) {
    echo "Shift+Insert sent successfully\n";
} else {
    echo "Failed to send Shift+Insert\n";
}

sleep(2);

// Example 7: Send Shift+A (uppercase A)
echo "\n";

// Set variables for sending Shift+A
$keyCode = "65"; // A key code

// Send Shift+A (uppercase A)
echo "7. Send Shift+A (uppercase A): ";
$result = SYSTEM::$keyboard->send_key($keyCode, false, false, false, true);
if ($result) {
    echo "Shift+A sent successfully\n";
} else {
    echo "Failed to send Shift+A\n";
}

sleep(2);

// Example 8: Disable Shift prefix
echo "\n";

// Set variables for disabling Shift prefix
$enable = false;

// Disable Shift prefix
echo "8. Disable Shift prefix: ";
$result = SYSTEM::$keyboard->set_shift_prefix($enable);
if ($result) {
    echo "Shift prefix disabled successfully\n";
} else {
    echo "Failed to disable Shift prefix\n";
}

// Quit the application
WINDOW::$app->quit();
?>