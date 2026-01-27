<?php
// Scenario: Demonstrates how to send input text with various options including delays

$xhe_host = "127.0.0.1:7011";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// Set variables for navigation
$url = TEST_POLYGON_URL . "input.html";

// Navigate to the webpage
echo "Navigate to '$url': ";
$result = WEB::$browser->navigate($url);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Set focus on search input field
echo "\n";

// Set variables for setting focus
$inputNumber = 0;

// Set focus on the search input field
echo "Set focus on input field number $inputNumber: ";
$result = DOM::$input->set_focus_by_number($inputNumber);
if ($result) {
    echo "Focus set successfully\n";
} else {
    echo "Failed to set focus\n";
}

// Example 1: Input text without delay
echo "\n";

// Set variables for text input
$text = "Web абвгдеё template";

// Input text without delay
echo "1. Input text '$text': ";
$result = SYSTEM::$keyboard->send_input($text);
if ($result) {
    echo "Text input successful\n";
} else {
    echo "Failed to input text\n";
}

// Example 2: Input text with delay and with special characters
echo "\n";

// Set variables for text input with delay and with special characters
$text = " ії abc\ntempl\nate \nабвгдеёжзийклмнопрстуфхцчщыьъэюя";
$delay = 100;
$timeout = 1000;

// Input text with delay
echo "2. Input text with delay and with special characters: ";
$result = SYSTEM::$keyboard->send_input($text, $delay, $timeout);
if ($result) {
    echo "Text input successful\n";
} else {
    echo "Failed to input text\n";
}

// Quit the application
WINDOW::$app->quit();
?>