<?php
// Scenario: Demonstrate send_keyboard_input_by_name function for sending keyboard input to DOM elements by their name attribute
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

// Example 1: Send keyboard input to an element by its exact name
echo "Example 1: Sending keyboard input to element by exact name\n";
$elementName = "id0";
$inputText = "Test input for id0";

// Send keyboard input
$keyboardResult = DOM::$input->send_keyboard_input_by_name($elementName, $inputText);

// Check the result
if ($keyboardResult) {
    echo "Successfully sent keyboard input '{$inputText}' to element with name '{$elementName}'\n";
} else {
    echo "Failed to send keyboard input. Element may not exist or error occurred.\n";
}

// Example 2: Send keyboard input to another element by its name
echo "\n\nExample 2: Sending keyboard input to element by name\n";
$elementName = "id1";
$inputText = "Test input for id1";

// Send keyboard input
$keyboardResult2 = DOM::$input->send_keyboard_input_by_name($elementName, $inputText);

// Check the result
if ($keyboardResult2) {
    echo "Successfully sent keyboard input '{$inputText}' to element with name '{$elementName}'\n";
} else {
    echo "Failed to send keyboard input. Element may not exist or error occurred.\n";
}

// Example 3: Send keyboard input to an element by name in a specific frame
echo "\n\nExample 3: Sending keyboard input to element by name in a specific frame\n";
$elementName = "fr_id0";
$inputText = "Frame input test";
$frameNumber = 0; // First frame

// Send keyboard input
$keyboardResult3 = DOM::$input->send_keyboard_input_by_name($elementName, $inputText, 1, $frameNumber);

// Check the result
if ($keyboardResult3) {
    echo "Successfully sent keyboard input '{$inputText}' to element with name '{$elementName}' in frame {$frameNumber}\n";
} else {
    echo "Failed to send keyboard input. Element may not exist in the specified frame or error occurred.\n";
}


// Quit the application
WINDOW::$app->quit();
?>