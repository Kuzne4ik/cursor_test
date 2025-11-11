<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get the length (total number of options) of a select element found by its name attribute
// The parameter is the name attribute of the select element
$length = DOM::$listbox->get_length_by_name("contries");

if ($length !== false) {
    echo "The length (total number of options) of the select element with name 'contries' is: " . $length . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>