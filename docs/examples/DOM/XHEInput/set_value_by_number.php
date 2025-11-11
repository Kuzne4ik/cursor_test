<?php
// Scenario: Set value of an input element by its number on the page

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Set value of the first input element (number 0)
echo "Setting value of the first input element (number 0)...\n";
$result = DOM::$input->set_value_by_number(0, "John Doe");
if ($result) {
    echo "Successfully set value of the first input element.\n";
    // Verify the value was set
    $value = DOM::$input->get_value_by_number(0);
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of the first input element.\n";
}

// Example 2: Set value of the second input element (number 1)
echo "\nSetting value of the second input element (number 1)...\n";
$result = DOM::$input->set_value_by_number(1, "mypassword123");
if ($result) {
    echo "Successfully set value of the second input element.\n";
    // Verify the value was set
    $value = DOM::$input->get_value_by_number(1);
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of the second input element.\n";
}

// Example 3: Set value of an input element within a frame (frame=0)
echo "\nSetting value of an input element within frame 0...\n";
$result = DOM::$input->set_value_by_number(0, "search query", "0");
if ($result) {
    echo "Successfully set value of the input element within frame 0.\n";
    // Verify the value was set
    $value = DOM::$input->get_value_by_number(0, "0");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of the input element within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>