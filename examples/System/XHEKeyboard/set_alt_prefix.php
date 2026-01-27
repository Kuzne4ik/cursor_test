<?php
// Scenario: Demonstrates how to set and use Alt key prefix for keyboard operations

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Set Alt prefix
echo "\n";

// Set variables for setting Alt prefix
$enable = true;

// Set variables for navigation to test page
$testUrl = TEST_POLYGON_URL . "input.html";

// Navigate to the test page
echo "Navigate to test page with listbox: ";
$result = WEB::$browser->navigate($testUrl);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

// Set Alt prefix
echo "1. Set Alt prefix to $enable: ";
$result = SYSTEM::$keyboard->set_alt_prefix($enable);
if ($result) {
    echo "Alt prefix set successfully\n";
} else {
    echo "Failed to set Alt prefix\n";
}

// Example 2: Set focus on input field
echo "\n";

// Set variables for setting focus
$inputNumber = 0;

// Set focus on input field
echo "2. Set focus on input field number $inputNumber: ";
$result = DOM::$input->set_focus_by_number($inputNumber);
if ($result) {
    echo "Focus set successfully\n";
} else {
    echo "Failed to set focus\n";
}

// Example 3: Send Alt+F4 combination (close browser)
echo "\n";
 SYSTEM::$keyboard->send_input(54321);

// Set variables for sending Alt+whitespace
$keyCode = "8"; //  BACKSPACE key code

// Send Alt+ BACKSPACE combination
echo "3. Send Alt+ BACKSPACE combination: ";
$result = SYSTEM::$keyboard->send_key($keyCode, true);
if ($result) {
    echo "Alt+Whitespace sent successfully\n";
} else {
    echo "Failed to send Alt+Whitespace\n";
}

sleep(2);

// Example 4: Disable Alt prefix
echo "\n";

// Set variables for disabling Alt prefix
$enable = false;

// Disable Alt prefix
echo "4. Disable Alt prefix: ";
$result = SYSTEM::$keyboard->set_alt_prefix($enable);
if ($result) {
    echo "Alt prefix disabled successfully\n";
} else {
    echo "Failed to disable Alt prefix\n";
}

// Quit the application
WINDOW::$app->quit();
?>