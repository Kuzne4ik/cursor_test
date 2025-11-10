<?php
// Scenario: Demonstrates how to select a random option in a select element found by name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_for();

// Select a random option in a select element found by its name attribute
// The parameter is the name attribute of the select element
$success = DOM::$listbox->select_random_by_name("country_select");

if ($success) {
    echo "Successfully selected a random option in the select element with name 'country_select'\n\n";
} else {
    echo "Failed to select a random option or the select element with name 'country_select' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>