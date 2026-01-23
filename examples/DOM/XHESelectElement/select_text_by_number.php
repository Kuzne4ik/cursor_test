<?php
// Scenario: Select an option by text content in a select element found by its number
// Description: Demonstrates how to select an option by its text content from a select element based on its position number on the page
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

// Select an option by its text content in a select element found by number
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $text: The text content of the option to select
// - $exactly: Whether to match the text exactly (true) or partially (false)
$success = DOM::$listbox->select_text_by_number(0, "Canada", true, -1);

if ($success) {
    echo "Successfully selected the option with text 'Canada' in the first select element\n\n";
} else {
    echo "Failed to select the option or the select element was not found\n\n";
}

// Select an option by its text content in a select element found by number with frame parameter
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $text: The text content of the option to select
// - $exactly: Whether to match the text exactly (true) or partially (false)
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->select_text_by_number(0, "USA", true, 0);

if ($successWithFrame) {
    echo "Successfully selected the option with text 'USA' in the first select element in frame 0\n\n";
} else {
    echo "Failed to select the option or the select element was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>