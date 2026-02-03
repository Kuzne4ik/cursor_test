<?php
// Scenario: Demonstrates how to emulate key up events

$xhe_host = "127.0.0.1:7013";
// Connect functional objects if not already connected
if (!isset($path)){
  $path="../../../Templates/init.php";
  require($path);
}

// info
echo "\n<span >keyboard->" . basename (__FILE__) . "</span>\n";

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
// Example 1: Set focus on search input field
echo "\n";

// Set variables for setting focus
$inputNumber = 1;

// Set focus on the search input field
echo "1. Set focus on input field number $inputNumber: ";
$result = DOM::$input->set_focus_by_number($inputNumber);
if ($result) {
    echo "Focus set successfully\n";
} else {
    echo "Failed to set focus\n";
}

// Quit the application
WINDOW::$app->quit();
?>