<?php
// Scenario: Demonstrates how to select multiple options by indexes in a select element found by number
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select multiple options by indexes in a multi-select element found by number
// Parameters:
// - $number: The number of the multi-select element on the page (0-based)
// - $indexes: A string containing comma-separated indexes of options to select
$success = DOM::$listbox->multi_select_indexes_by_number(0, "1,3,5");

if ($success) {
    echo "Successfully selected options at indexes 1, 3, and 5 in the first multi-select element\n\n";
} else {
    echo "Failed to select the options or the multi-select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>