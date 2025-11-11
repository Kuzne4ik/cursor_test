<?php
// Scenario: Demonstrates how to get the size attribute value of a select element found by attribute
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get the size (number of visible options) of a select element found by its attribute
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
$size = DOM::$listbox->get_size_by_attribute("name", "contries", true);

if ($size !== false) {
    echo "The size of the select element with name 'contries' is: " . $size . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>