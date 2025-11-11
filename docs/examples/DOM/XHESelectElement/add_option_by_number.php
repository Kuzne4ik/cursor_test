<?php
// Scenario: Demonstrates how to add a new option to a select element found by number
// Scenario: Demonstrates how to add a new option to a select element found by number
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Add a new option to a select element found by number
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $text: The text content of the new option
// - $value: The value attribute of the new option
// - $index: The position where the new option should be inserted (optional, default is at the end)
$success = DOM::$listbox->add_option_by_number(0, "Australia", "AU");

if ($success) {
    echo "Successfully added a new option 'Australia' with value 'AU' to the first select element\n\n";
} else {
    echo "Failed to add the option or the select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>