<?php
// Scenario: Demonstrates how to select a random option in a select element found by number
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select a random option in a select element found by number
// The parameter is the number of the select element on the page (0-based)
$success = DOM::$listbox->select_random_by_number(0);

if ($success) {
    echo "Successfully selected a random option in the first select element\n\n";
} else {
    echo "Failed to select a random option or the select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>