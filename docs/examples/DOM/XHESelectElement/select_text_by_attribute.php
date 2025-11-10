<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_for();

// Select an option by its text content in a select element found by its attribute
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $text: The text content of the option to select
// - $text_exactly: Whether to match the text exactly (true) or partially (false)
$success = DOM::$listbox->select_text_by_attribute("id", "country_dropdown", true, "Canada");

if ($success) {
    echo "Successfully selected the option with text 'Canada' in the select element with id 'country_dropdown'\n\n";
} else {
    echo "Failed to select the option or the select element with id 'country_dropdown' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>