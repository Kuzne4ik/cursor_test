<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a form containing a select element
WEB::$browser->navigate("https://example.com/registration-form");

// Wait for page to load
WEB::$browser->wait_for();

// Select an option by index in a select element within a form, found by attribute and form number
// Parameters:
// - $attr_name: The name of attribute to search by (e.g., "id", "class")
// - $attr_value: The value of attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $index: The index of the option to select
// - $form_number: The number of the form on the page (0-based)
$success = DOM::$listbox->select_index_by_attribute_by_form_number("id", "country_dropdown", true, 2, 0);

if ($success) {
    echo "Successfully selected the option at index 2 in the select element with id 'country_dropdown' within form 0\n\n";
} else {
    echo "Failed to select the option or the select element with id 'country_dropdown' in form 0 was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>