<?php
// Scenario: Get the index of the selected option in a select element by its number
// Description: Demonstrates how to retrieve the index of the currently selected option from a select element based on its position number on the page
// Classes used: DOM, XHESelectElement, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get the index of the selected option in a select element found by number
// The parameter is the number of the select element on the page (0-based)
$selectedIndex = DOM::$listbox->get_selected_index_by_number(0, -1);

if ($selectedIndex >= 0) {
    echo "The index of the selected option in the first select element is: " . $selectedIndex . "\n\n";
} else {
    echo "No option is selected or the select element was not found\n\n";
}

// Get the index of the selected option in a select element found by number with frame parameter
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $frame: The frame number where the element is located (0-based)
$selectedIndexWithFrame = DOM::$listbox->get_selected_index_by_number(0, 0);

if ($selectedIndexWithFrame >= 0) {
    echo "The index of the selected option in the first select element in frame 0 is: " . $selectedIndexWithFrame . "\n\n";
} else {
    echo "No option is selected or the select element was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>