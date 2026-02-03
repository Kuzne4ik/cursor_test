<?php
// Scenario: Demonstrates how to get the type attribute value of a select element found by attribute
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

// Get the type of select element found by its attribute
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// Returns "select-one" for single-select elements or "select-multiple" for multi-select elements
$type = DOM::$listbox->get_type_by_attribute("name", "contries", true);

if ($type) {
    echo "The type of the select element with name 'contries' is: " . $type . "\n\n";
} else {
    echo "The select element with id 'contries' was not found\n\n";
}

// Get the type of select element found by its attribute with frame parameter
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $frame: The frame number where the element is located (0-based)
// Returns "select-one" for single-select elements or "select-multiple" for multi-select elements
$typeWithFrame = DOM::$listbox->get_type_by_attribute("name", "contries", true, 0);

if ($typeWithFrame) {
    echo "The type of the select element with name 'contries' in frame 0 is: " . $typeWithFrame . "\n\n";
} else {
    echo "The select element with id 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>