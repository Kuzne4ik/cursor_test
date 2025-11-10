<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_for();

// Select an option by its value attribute in a select element found by number
// Parameters:
// - $number: The number of select element on page (0-based)
// - $value: The value attribute of option to select
// - $exactly: Whether to match the value exactly (true) or partially (false)
$success = DOM::$listbox->select_value_by_number(0, "CA");

if ($success) {
    echo "Successfully selected the option with value 'CA' in the first select element\n\n";
} else {
    echo "Failed to select the option or the select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>