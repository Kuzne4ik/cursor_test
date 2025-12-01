<?php
// Scenario: Demonstrate send_keyboard_input_by_inner_text function for sending keyboard input to DOM elements by their inner text

// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with form elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");
WEB::$browser->wait_for();

// Example 1: Send keyboard input to an input element directly by its inner text
echo "\n\nExample 1: Sending keyboard input to input element directly by its inner text\n";
$innerText = "Вася Пупкин"; // Text that appears inside the input element (value attribute)
$inputText = "DirectInputUser123";
$exactly = true; // Exact match

// Send keyboard input directly to the input element by its inner text
$keyboardResult1 = DOM::$input->send_keyboard_input_by_inner_text($innerText, $exactly, $inputText);

// Check the result
if ($keyboardResult1) {
    echo "Successfully sent keyboard input '{$inputText}' to input element with inner text '{$innerText}'\n";
} else {
    echo "Failed to send keyboard input to input element with inner text '{$innerText}'.\n";
}

// Example 2: Send keyboard input to an input element by partial inner text match
echo "\n\nExample 2: Sending keyboard input to input element by partial inner text match\n";
$innerText = "Вася"; // Partial text that appears in the input element (value attribute)
$inputText = "user@example.com";
$exactly = false; // Partial match

// Send keyboard input to the input element by partial inner text match
$keyboardResult2 = DOM::$input->send_keyboard_input_by_inner_text($innerText, $exactly, $inputText);

// Check the result
if ($keyboardResult2) {
    echo "Successfully sent keyboard input '{$inputText}' to input element containing text '{$innerText}'\n";
} else {
    echo "Failed to send keyboard input to input element containing text '{$innerText}'.\n";
}

// Example 3: Send keyboard input to an input element by inner text in a specific frame
echo "\n\nExample 3: Sending keyboard input to input element by inner text in a specific frame\n";
$innerText = ""; // Password input elements typically have no inner text or value
$inputText = "SecurePassword456";
$exactly = true;
$frameNumber = -1; // Main frame (not iframe)

// Send keyboard input to the input element by inner text in a specific frame
$keyboardResult3 = DOM::$input->send_keyboard_input_by_inner_text($innerText, $exactly, $inputText, INPUT_TIME, $frameNumber);

// Check the result
if ($keyboardResult3) {
    echo "Successfully sent keyboard input '{$inputText}' to input element with inner text '{$innerText}' in frame {$frameNumber}\n";
} else {
    echo "Failed to send keyboard input to input element with inner text '{$innerText}' in frame {$frameNumber}.\n";
}

// Quit the application
WINDOW::$app->quit();
?>