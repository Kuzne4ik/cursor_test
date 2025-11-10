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

// Get the size (number of visible options) of a select element found by its name attribute
// The parameter is the name attribute of the select element
$size = DOM::$listbox->get_size_by_name("country_select");

if ($size !== false) {
    echo "The size of the select element with name 'country_select' is: " . $size . "\n\n";
} else {
    echo "The select element with name 'country_select' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>