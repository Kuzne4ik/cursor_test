<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select an option by its value attribute in a select element found by its attribute
// Parameters:
// - $attr_name: The name of attribute to search by (e.g., "id", "class")
// - $attr_value: The value of attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $value: The value attribute of option to select
// - $value_exactly: Whether to match the value exactly (true) or partially (false)
$success = DOM::$listbox->select_value_by_attribute("name", "contries", true, "us");

if ($success) {
    echo "Successfully selected the option with value 'us' in the select element with name 'contries'\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>