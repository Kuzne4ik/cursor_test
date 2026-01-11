<?php
// Scenario: Get the index of the selected option in a select element by its attribute
// Description: Demonstrates how to retrieve the index of the currently selected option from a select element based on its attribute
// Classes used: DOM, XHESelectElement, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get the index of the selected option in a select element found by attribute
// The first parameter is the attribute name
// The second parameter is the attribute value
// The third parameter specifies if an exact match is required
$selectedIndex = DOM::$listbox->get_selected_index_by_attribute("name", "contries", true);

if ($selectedIndex >= 0) {
    echo "The index of the selected option in the select element with name='contries' is: " . $selectedIndex . "\n\n";
} else {
    echo "No option is selected or the select element was not found\n\n";
}

// Get the index of the selected option in a select element found by attribute with frame parameter
// Parameters:
// - $attr_name: The attribute name
// - $attr_value: The attribute value
// - $exactly: Specifies if an exact match is required
// - $frame: The frame number where the element is located (0-based)
$selectedIndexWithFrame = DOM::$listbox->get_selected_index_by_attribute("name", "contries", true, 0);

if ($selectedIndexWithFrame >= 0) {
    echo "The index of the selected option in the select element with name='contries' in frame 0 is: " . $selectedIndexWithFrame . "\n\n";
} else {
    echo "No option is selected or the select element was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>