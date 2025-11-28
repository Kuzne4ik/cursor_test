<?php
// Scenario: Demonstrate the is_exist_by_name function for checking if DOM elements exist by their name attribute

// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements that have name attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");
WEB::$browser->wait_for();

// Example 1: Check if an anchor exists by its name (existing anchor)
echo "Example 1: Checking if an input exists by its name (existing input)\n";
$inputName = "id1"; // Name of an existing input

// Check if input exists
$exists = DOM::$input->is_exist_by_name($inputName);

// Check the result
if ($exists) {
    echo "input with name '{$inputName}' exists.\n";
} else {
    echo "input with name '{$inputName}' does not exist.\n";
}

// Example 2: Check if an anchor exists in a specific frame
echo "\n\nExample 2: Checking if an input exists in a specific frame\n";
$inputName = "fr_id0"; // Name of an input in a frame
$frame = 0; // First frame

// Check if input exists in frame
$exists = DOM::$input->is_exist_by_name($inputName, $frame);

// Check the result
if ($exists) {
    echo "input with name '{$inputName}' exists in frame {$frame}.\n";
} else {
    echo "input with name '{$inputName}' does not exist in frame {$frame}.\n";
}

// Quit the application
WINDOW::$app->quit();
?>