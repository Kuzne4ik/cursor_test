<?php
// Scenario: Demonstrates how to input text using the keyboard with various options

$xhe_host = "127.0.0.1:7011";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}

// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

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

// Example 1: Set focus on the search input field

echo "1. Set focus on input field number $inputNumber: ";
$result = DOM::$input->set_focus_by_number($inputNumber);
if ($result) {
    echo "Focus set successfully\n";
} else {
    echo "Failed to set focus\n";
}

// Example 3: Input text without delay
echo "\n";

// Set variables for text input
$text = "Web абвгдеё template";

// Input text without delay
echo "3. Input text '$text': ";
$result = SYSTEM::$keyboard->input($text);
if ($result) {
    echo "Text input successful\n";
} else {
    echo "Failed to input text\n";
}

// Example 4: Input text with delay
echo "\n";

// Set variables for text input with delay
$text = " abc template абвгдеёжзийклмнопрстуфхцчщыьъэю";
$delay = 100;

// Input text with delay
echo "4. Input text '$text' with delay $delay ms: ";
$result = SYSTEM::$keyboard->input($text, $delay);
if ($result) {
    echo "Text input successful\n";
} else {
    echo "Failed to input text\n";
}

// Example 5: Navigate to test page
echo "\n";

// Set variables for navigation to test page
$testUrl = TEST_POLYGON_URL . "textarea.html";

// Navigate to the test page
echo "5. Navigate to test page: ";
$result = WEB::$browser->navigate($testUrl);
if ($result) {
    echo "Navigation successful\n";
} else {
    echo "Failed to navigate\n";
}

// Example 6: Set focus on textarea
echo "\n";

// Set variables for setting focus on textarea
$textareaNumber = 0;
$emptyText = "";

// Clear textarea and set focus
echo "6. Clear textarea and set focus: ";
$result1 = DOM::$textarea->set_value_by_number($textareaNumber, $emptyText);
$result2 = DOM::$textarea->set_focus_by_number($textareaNumber);
if ($result1 && $result2) {
    echo "Textarea cleared and focus set successfully\n";
} else {
    echo "Failed to clear textarea or set focus\n";
}

// Example 7: Input text with special characters and delay
echo "\n";

// Set variables for text input with special characters
$text = " ії abc\ntemplate \nабвгдеёжзийклмнопрстуфхцчщыьъэюя";
$delay = 100;
$timeout = 1000;

// Input text with special characters and delay
echo "7. Input text with special characters and delay: ";
$result = SYSTEM::$keyboard->input($text, $delay, $timeout);
if ($result) {
    echo "Text input successful\n";
} else {
    echo "Failed to input text\n";
}

// Quit the application
WINDOW::$app->quit();
?>