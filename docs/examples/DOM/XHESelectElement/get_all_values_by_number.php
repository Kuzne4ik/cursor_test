<?php
// Scenario: Demonstrates how to get all value options from a select element found by number
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get all the value attributes of options in a select element found by number
// The parameter is the number of the select element on the page (0-based)
// Returns a string with all option values separated by "<br>"
$allValues = DOM::$listbox->get_all_values_by_number(0);

if ($allValues) {
    echo "All option values in the first select element:\n";
    echo $allValues . "\n\n";
} else {
    echo "The select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>