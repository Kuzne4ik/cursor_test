<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a select element
WEB::$browser->navigate("https://example.com/form-with-select");

// Wait for the page to load
WEB::$browser->wait_for();

// Add a new option to a select element found by its name attribute
// Parameters:
// - $name: The name attribute of the select element
// - $text: The text content of the new option
// - $value: The value attribute of the new option
// - $index: The position where the new option should be inserted (optional, default is at the end)
$success = DOM::$listbox->add_option_by_name("country_select", "Australia", "AU");

if ($success) {
    echo "Successfully added a new option 'Australia' with value 'AU' to the select element with name 'country_select'\n\n";
} else {
    echo "Failed to add the option or the select element with name 'country_select' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>