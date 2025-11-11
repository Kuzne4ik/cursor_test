<?php
// Scenario: Demonstrates how to add a new option to a select element found by name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Add a new option to a select element found by its name attribute
// Parameters:
// - $name: The name attribute of the select element
// - $text: The text content of the new option
// - $value: The value attribute of the new option
// - $index: The position where the new option should be inserted (optional, default is at the end)
$success = DOM::$listbox->add_option_by_name("contries", "Australia", "AU");

if ($success) {
    echo "Successfully added a new option 'Australia' with value 'AU' to the select element with name 'contries'\n\n";
} else {
    echo "Failed to add the option or the select element with name 'contries' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>