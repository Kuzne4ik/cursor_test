<?php
// Scenario: Get the number of options in a select element by its name
// Description: Demonstrates how to retrieve the total number of options from a select element based on its name attribute
// Classes used: DOM, XHESelectElement, XHEBrowser, XHEApplication
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
$length = DOM::$listbox->get_length_by_name("contries", -1);

if ($length !== false) {
    echo "The length (total number of options) of the select element with name 'contries' is: " . $length . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Get the length (total number of options) of a select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of the select element
// - $frame: The frame number where the element is located (0-based)
$lengthWithFrame = DOM::$listbox->get_length_by_name("contries", 0);

if ($lengthWithFrame !== false) {
    echo "The length (total number of options) of the select element with name 'contries' in frame 0 is: " . $lengthWithFrame . "\n\n";
} else {
    echo "The select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>