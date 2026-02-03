<?php
// Scenario: Get all value options from a select element by its name
// Description: Demonstrates how to retrieve all value attributes from a select element based on its name attribute
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

// Get all the value attributes of options in a select element found by its name attribute
// The parameter is the name attribute of the select element
// Returns a string with all option values separated by "<br>"
$allValues = DOM::$listbox->get_all_values_by_name("contries", -1);

if ($allValues) {
    echo "All option values in the select element with name 'contries':\n";
    echo $allValues . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Get all the value attributes of options in a select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of the select element
// - $frame: The frame number where the element is located (0-based)
// Returns a string with all option values separated by "<br>"
$allValuesWithFrame = DOM::$listbox->get_all_values_by_name("contries", 0);

if ($allValuesWithFrame) {
    echo "All option values in the select element with name 'contries' in frame 0:\n";
    echo $allValuesWithFrame . "\n\n";
} else {
    echo "The select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>