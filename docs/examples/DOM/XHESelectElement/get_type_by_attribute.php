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

// Get the type of a select element found by its attribute
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// Returns "select-one" for single-select elements or "select-multiple" for multi-select elements
$type = DOM::$listbox->get_type_by_attribute("id", "country_dropdown", true);

if ($type !== false) {
    echo "The type of the select element with id 'country_dropdown' is: " . $type . "\n\n";
} else {
    echo "The select element with id 'country_dropdown' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>