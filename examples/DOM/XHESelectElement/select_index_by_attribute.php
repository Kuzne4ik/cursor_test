<?php
// Scenario: Select an option by index in a select element found by its attribute
// Description: Demonstrates how to select an option by its index position from a select element based on its attribute
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

// Find the select element by attribute and select option by index
// The first parameter is the attribute name
// The second parameter is the attribute value
// The third parameter specifies if exact match is required
// The fourth parameter is the index of the option to select (0-based)
$success = DOM::$listbox->select_index_by_attribute("name", "contries", true, 2, -1);

if ($success) {
    echo "Successfully selected option at index 2 in the select element with name='contries'\n\n";
} else {
    echo "Failed to select option\n\n";
}

// Find the select element by attribute and select option by index with frame parameter
// Parameters:
// - $attr_name: The attribute name
// - $attr_value: The attribute value
// - $exactly: Specifies if an exact match is required
// - $index: The index of the option to select (0-based)
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->select_index_by_attribute("name", "contries", true, 1, 0);

if ($successWithFrame) {
    echo "Successfully selected option at index 1 in the select element with name='contries' in frame 0\n\n";
} else {
    echo "Failed to select option in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>