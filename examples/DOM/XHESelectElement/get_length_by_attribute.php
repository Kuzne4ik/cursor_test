<?php
// Scenario: Get the number of options in a select element by its attribute
// Description: Demonstrates how to retrieve the total number of options from a select element based on its attribute
// Classes used: DOM, XHESelectElement, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get the length (total number of options) of a select element found by its attribute
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
$length = DOM::$listbox->get_length_by_attribute("name", "contries", true);

if ($length !== -1) {
    echo "The length (total number of options) of the select element with name 'contries' is: " . $length . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Get the length (total number of options) of a select element found by its attribute with frame parameter
// The parameters are:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $frame: The frame number where the element is located (0-based)
$lengthWithFrame = DOM::$listbox->get_length_by_attribute("name", "contries", true, 0);

if ($lengthWithFrame !== -1) {
    echo "The length (total number of options) of the select element with name 'contries' in frame 0 is: " . $lengthWithFrame . "\n\n";
} else {
    echo "The select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>