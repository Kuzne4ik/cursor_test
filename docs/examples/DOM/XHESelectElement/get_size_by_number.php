<?php
// Scenario: Demonstrates how to get the size attribute value of a select element found by number
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get the size (number of visible options) of a select element found by number
// The parameter is the number of the select element on the page (0-based)
$size = DOM::$listbox->get_size_by_number(0, -1);

if ($size !== -1) {
    echo "The size of the first select element is: " . $size . "\n\n";
} else {
    echo "The select element was not found\n\n";
}

// Get the size (number of visible options) of a select element found by number with frame parameter
// The parameters are:
// - $number: The number of the select element on the page (0-based)
// - $frame: The frame number where the element is located (0-based)
$sizeWithFrame = DOM::$listbox->get_size_by_number(0, 0);

if ($sizeWithFrame !== -1) {
    echo "The size of the first select element in frame 0 is: " . $sizeWithFrame . "\n\n";
} else {
    echo "The select element was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>