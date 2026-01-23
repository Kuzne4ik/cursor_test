<?php
// Scenario: Demonstrates how to get the size attribute value of a select element found by name
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

// Get the size (number of visible options) of a select element found by its name attribute
// The parameter is the name attribute of the select element
$size = DOM::$listbox->get_size_by_name("contries", -1);

if ($size !== -1) {
    echo "The size of the select element with name 'contries' is: " . $size . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Get the size (number of visible options) of a select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of the select element
// - $frame: The frame number where the element is located (0-based)
$sizeWithFrame = DOM::$listbox->get_size_by_name("contries", 0);

if ($sizeWithFrame !== -1) {
    echo "The size of the select element with name 'contries' in frame 0 is: " . $sizeWithFrame . "\n\n";
} else {
    echo "The select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>