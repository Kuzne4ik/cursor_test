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

// Get the length (total number of options) of a select element found by number
// The parameter is the number of the select element on the page (0-based)
$length = DOM::$listbox->get_length_by_number(0);

if ($length !== false) {
    echo "The length (total number of options) of the first select element is: " . $length . "\n\n";
} else {
    echo "The select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>