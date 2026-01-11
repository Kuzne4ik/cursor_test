<?php
// Scenario: Demonstrates how to get the type attribute value of a select element found by name
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

// Get the type of select element found by its name attribute
// The parameter is the name attribute of the select element
// Returns "select-one" for single-select elements or "select-multiple" for multi-select elements
$type = DOM::$listbox->get_type_by_name("contries", -1);

if ($type) {
    echo "The type of the select element with name 'contries' is: " . $type . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Get the type of select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of the select element
// - $frame: The frame number where the element is located (0-based)
// Returns "select-one" for single-select elements or "select-multiple" for multi-select elements
$typeWithFrame = DOM::$listbox->get_type_by_name("contries", 0);

if ($typeWithFrame) {
    echo "The type of the select element with name 'contries' in frame 0 is: " . $typeWithFrame . "\n\n";
} else {
    echo "The select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>