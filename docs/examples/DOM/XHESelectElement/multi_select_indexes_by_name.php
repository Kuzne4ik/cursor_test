<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a multi-select element
WEB::$browser->navigate("https://example.com/form-with-multiselect");

// Wait for page to load
WEB::$browser->wait_for();

// Select multiple options by indexes in a multi-select element found by its name attribute
// Parameters:
// - $name: The name attribute of the multi-select element
// - $indexes: A string containing comma-separated indexes of options to select
$success = DOM::$listbox->multi_select_indexes_by_name("countries_multiselect", "1,3,5");

if ($success) {
    echo "Successfully selected options at indexes 1, 3, and 5 in multi-select element with name 'countries_multiselect'\n\n";
} else {
    echo "Failed to select the options or the multi-select element with name 'countries_multiselect' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>