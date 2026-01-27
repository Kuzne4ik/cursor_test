<?php
// Scenario: Demonstrates how to emulate key down events

$xhe_host = "127.0.0.1:7013";
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

// Example 1: Emulate 'a' key down and up sequence
echo "\n";

// Set variables for setting focus
$inputNumber = 1;

// Set focus on the search input field
echo "Set focus on input field number $inputNumber: ";
$result = DOM::$input->set_focus_by_number($inputNumber);
if ($result) {
    echo "Focus set successfully\n";
} else {
    echo "Failed to set focus\n";
}

// Set variables for key down and up sequence by ALt key code
$keyChar = "a";
$isAltKey = false;

// Emulate 'a' key down and up sequence
echo "2. Emulate '$keyChar' key down and up sequence: ";
$result1 = SYSTEM::$keyboard->key_down($keyChar, $isAltKey);
$result2 = SYSTEM::$keyboard->key_up($keyChar, $isAltKey);
if ($result1 && $result2) {
    echo "Key sequence successful\n";
} else {
    echo "Failed to complete key sequence\n";
}

// Set variables for key down and up sequence
$keyChar = "86";
$isAltKey = true;

// Emulate 'a' key down and up sequence
echo "2. Emulate '$keyChar' key down and up sequence: ";
$result1 = SYSTEM::$keyboard->key_down($keyChar, $isAltKey);
$result2 = SYSTEM::$keyboard->key_up($keyChar, $isAltKey);
if ($result1 && $result2) {
    echo "Key sequence successful\n";
} else {
    echo "Failed to complete key sequence\n";
}


// Quit the application
WINDOW::$app->quit();
?>