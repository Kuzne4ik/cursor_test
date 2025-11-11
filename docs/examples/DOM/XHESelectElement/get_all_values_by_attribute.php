<?php
// Scenario: Demonstrates how to get all value options from a select element found by attribute
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get all the value attributes of options in a select element found by its attribute
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// Returns a string with all option values separated by "<br>"
$allValues = DOM::$listbox->get_all_values_by_attribute("name", "contries", true);

if ($allValues) {
    echo "All option values in the select element with name 'contries':\n";
    echo $allValues . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Get all the value attributes of options in a select element found by its attribute with frame parameter
// Parameters:
// - $attr_name: The name of attribute to search by (e.g., "id", "class")
// - $attr_value: The value of attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $frame: The frame number where the element is located (0-based)
// Returns a string with all option values separated by "<br>"
$allValuesWithFrame = DOM::$listbox->get_all_values_by_attribute("name", "contries", true, 0);

if ($allValuesWithFrame) {
    echo "All option values in the select element with name 'contries' in frame 0:\n";
    echo $allValuesWithFrame . "\n\n";
} else {
    echo "The select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>