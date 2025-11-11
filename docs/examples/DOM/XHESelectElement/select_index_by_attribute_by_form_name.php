<?php
// Scenario: Demonstrates how to select an option by index in a select element found by attribute within a form by name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select an option by index in a select element within a form, found by attribute and form name
// Parameters:
// - $attr_name: The name of attribute to search by (e.g., "id", "class")
// - $attr_value: The value of attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $index: The index of the option to select
// - $form_name: The name attribute of the form
$success = DOM::$listbox->select_index_by_attribute_by_form_name("name", "contries", true, 2, "form1");

if ($success) {
    echo "Successfully selected the option at index 2 in the select element with name 'contries' within form 'form1'\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' in form 'form1' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>