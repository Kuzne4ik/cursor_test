<?php
// Scenario: Demonstrate send_keyboard_input_by_number function for sending keyboard input to DOM elements by their number
// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");
WEB::$browser->wait_for();

// Example 1: Send keyboard input to an element by its number
echo "Example 1: Sending keyboard input to element by number\n";
$elementNumber = 0; // First element on the page
$inputText = "Test input for element 0";

// Send keyboard input
$keyboardResult = DOM::$input->send_keyboard_input_by_number($elementNumber, $inputText);

// Check the result
if ($keyboardResult) {
    echo "Successfully sent keyboard input '{$inputText}' to element with number {$elementNumber}\n";
} else {
    echo "Failed to send keyboard input. Element may not exist or error occurred.\n";
}

// Example 2: Send keyboard input to another element by its number
echo "\n\nExample 2: Sending keyboard input to element by number\n";
$elementNumber = 1; // Second element on the page
$inputText = "Test input for element 1";

// Send keyboard input
$keyboardResult2 = DOM::$input->send_keyboard_input_by_number($elementNumber, $inputText);

// Check the result
if ($keyboardResult2) {
    echo "Successfully sent keyboard input '{$inputText}' to element with number {$elementNumber}\n";
} else {
    echo "Failed to send keyboard input. Element may not exist or error occurred.\n";
}

// Example 3: Send keyboard input to an element by its number in a specific frame
echo "\n\nExample 3: Sending keyboard input to element by number in a specific frame\n";
$elementNumber = 0; // First element in the frame
$inputText = "Frame input test";
$frameNumber = 0; // First frame

// Send keyboard input
$keyboardResult3 = DOM::$input->send_keyboard_input_by_number($elementNumber, $inputText, $frameNumber);

// Check the result
if ($keyboardResult3) {
    echo "Successfully sent keyboard input '{$inputText}' to element with number {$elementNumber} in frame {$frameNumber}\n";
} else {
    echo "Failed to send keyboard input. Element may not exist in the specified frame or error occurred.\n";
}

// Quit the application
WINDOW::$app->quit();
?>