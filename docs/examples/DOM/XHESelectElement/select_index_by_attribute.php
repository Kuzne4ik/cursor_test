<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a select element
WEB::$browser->navigate("https://example.com/form-with-select");

// Wait for the page to load
WEB::$browser->wait_for();

// Find the select element by attribute and select option by index
// The first parameter is the attribute name
// The second parameter is the attribute value
// The third parameter specifies if exact match is required
// The fourth parameter is the index of the option to select (0-based)
$success = DOM::$listbox->select_index_by_attribute("id", "country_dropdown", true, 2);

if ($success) {
    echo "Successfully selected option at index 2 in the select element with id='country_dropdown'\n\n";
} else {
    echo "Failed to select option\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>