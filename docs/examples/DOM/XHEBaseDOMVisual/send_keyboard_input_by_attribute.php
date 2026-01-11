<?php
// Scenario: Demonstrate send_keyboard_input_by_attribute function for sending keyboard input to DOM elements by their attributes
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

// Example 1: Send keyboard input to an element by its exact attribute value
echo "Example 1: Sending keyboard input to element by exact attribute value\n";
$attrName = "id";
$attrValue = "id0";
$inputText = "Test input for id0";
$exactly = true; // Exact match

// Send keyboard input
$keyboardResult = DOM::$input->send_keyboard_input_by_attribute($attrName, $attrValue, $exactly, $inputText, );

// Check the result
if ($keyboardResult) {
    echo "Successfully sent keyboard input '{$inputText}' to element with {$attrName}='{$attrValue}'\n";
} else {
    echo "Failed to send keyboard input. Element may not exist or error occurred.\n";
}

// Example 2: Send keyboard input to an element by partial attribute value
echo "\n\nExample 2: Sending keyboard input to element by partial attribute value\n";
$attrName = "name";
$attrValue = "id"; // Partial match
$inputText = "Test input for partial name match";
$exactly = false; // Partial match

// Send keyboard input
$keyboardResult2 = DOM::$input->send_keyboard_input_by_attribute($attrName, $attrValue, $exactly, $inputText);

// Check the result
if ($keyboardResult2) {
    echo "Successfully sent keyboard input '{$inputText}' to element with {$attrName} containing '{$attrValue}'\n";
} else {
    echo "Failed to send keyboard input. Element may not exist or error occurred.\n";
}

// Example 3: Send keyboard input to an element by attribute in a specific frame
echo "\n\nExample 3: Sending keyboard input to element by attribute in a specific frame\n";
$attrName = "id";
$attrValue = "fr_id0";
$inputText = "Test input for frame element";
$exactly = true;
$frameNum = 0; // First frame

// Send keyboard input
$keyboardResult3 = DOM::$input->send_keyboard_input_by_attribute($attrName, $attrValue, $exactly, $inputText, 1, $frameNum);

// Check the result
if ($keyboardResult3) {
    echo "Successfully sent keyboard input '{$inputText}' to element with {$attrName}='{$attrValue}' in frame {$frameNum}\n";
} else {
    echo "Failed to send keyboard input. Element may not exist in the specified frame or error occurred.\n";
}

// Quit the application
WINDOW::$app->quit();
?>