<?php
// Scenario: Select an option by index in a select element found by its number
// Description: Demonstrates how to select an option by its index position from a select element based on its position number on the page
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

// Find the select element by number and select option by index
// The first parameter is the number of the select element on the page (0-based)
// The second parameter is the index of the option to select (0-based)
$success = DOM::$listbox->select_index_by_number(0, 1, -1);

if ($success) {
    echo "Successfully selected option at index 1 in the first select element\n\n";
} else {
    echo "Failed to select option\n\n";
}

// Find the select element by number and select option by index with frame parameter
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $index: The index of the option to select (0-based)
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->select_index_by_number(0, 0, 0);

if ($successWithFrame) {
    echo "Successfully selected option at index 0 in the first select element in frame 0\n\n";
} else {
    echo "Failed to select option in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>