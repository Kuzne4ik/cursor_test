<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a select element
WEB::$browser->navigate("https://example.com/form-with-select");

// Wait for the page to load
WEB::$browser->wait_for();

// Get the index of the selected option in a select element found by attribute
// The first parameter is the attribute name
// The second parameter is the attribute value
// The third parameter specifies if an exact match is required
$selectedIndex = DOM::$listbox->get_selected_index_by_attribute("id", "country_dropdown", true);

if ($selectedIndex >= 0) {
    echo "The index of the selected option in the select element with id='country_dropdown' is: " . $selectedIndex . "\n\n";
} else {
    echo "No option is selected or the select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>