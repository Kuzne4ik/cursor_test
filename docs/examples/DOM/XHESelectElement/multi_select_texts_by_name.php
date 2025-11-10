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

// Select multiple options by texts in a multi-select element found by its name attribute
// Parameters:
// - $name: The name attribute of the multi-select element
// - $texts: A string containing comma-separated text contents of options to select
$success = DOM::$listbox->multi_select_texts_by_name("countries_multiselect", "Canada,United States,United Kingdom");

if ($success) {
    echo "Successfully selected options with texts 'Canada', 'United States', and 'United Kingdom' in multi-select element with name 'countries_multiselect'\n\n";
} else {
    echo "Failed to select options or multi-select element with name 'countries_multiselect' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>