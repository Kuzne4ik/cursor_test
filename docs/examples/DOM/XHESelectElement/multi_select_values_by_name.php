<?php
// Scenario: Demonstrates how to select multiple options by values in a select element found by name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_for();

// Select multiple options by values in a multi-select element found by its name attribute
// Parameters:
// - $name: The name attribute of the multi-select element
// - $values: A string containing comma-separated value attributes of options to select
$success = DOM::$listbox->multi_select_values_by_name("countries_multiselect", "CA,US,UK");

if ($success) {
    echo "Successfully selected options with values 'CA', 'US', and 'UK' in multi-select element with name 'countries_multiselect'\n\n";
} else {
    echo "Failed to select the options or the multi-select element with name 'countries_multiselect' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>