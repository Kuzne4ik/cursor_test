<?php
// Scenario: Select an option by value attribute in a select element found by its name
// Description: Demonstrates how to select an option by its value attribute from a select element based on its name attribute
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

// Wait for page to load
WEB::$browser->wait_js();

// Select an option by its value attribute in a select element found by its name attribute
// Parameters:
// - $name: The name attribute of select element
// - $value: The value attribute of option to select
// - $exactly: Whether to match the value exactly (true) or partially (false)
$success = DOM::$listbox->select_value_by_name("contries", "us", true, -1);

if ($success) {
    echo "Successfully selected the option with value 'us' in the select element with name 'contries'\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' was not found\n\n";
}

// Select an option by its value attribute in a select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of select element
// - $value: The value attribute of option to select
// - $exactly: Whether to match the value exactly (true) or partially (false)
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->select_value_by_name("contries", "ca", true, 0);

if ($successWithFrame) {
    echo "Successfully selected the option with value 'ca' in the select element with name 'contries' in frame 0\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>