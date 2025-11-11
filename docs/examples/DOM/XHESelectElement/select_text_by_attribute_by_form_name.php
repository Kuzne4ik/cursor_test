<?php
// Scenario: Demonstrates how to select an option by text in a select element found by attribute within a form by name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select an option by text in a select element within a form, found by attribute and form name
// Parameters:
// - $attr_name: The name of attribute to search by (e.g., "id", "class")
// - $attr_value: The value of attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $text: The text content of option to select
// - $text_exactly: Whether to match the text exactly (true) or partially (false)
// - $form_name: The name attribute of the form
$success = DOM::$listbox->select_text_by_attribute_by_form_name("name", "contries", true, "Canada", true, "form1");

if ($success) {
    echo "Successfully selected the option with text 'Canada' in the select element with name 'contries' within form 'form1'\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' in form 'form1' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>