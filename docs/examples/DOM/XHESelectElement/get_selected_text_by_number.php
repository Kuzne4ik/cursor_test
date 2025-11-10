<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_for();

// Get the text of the selected option in a select element found by number
// The parameter is the number of the select element on the page (0-based)
$selectedText = DOM::$listbox->get_selected_text_by_number(0);

if ($selectedText !== false) {
    echo "The text of the selected option in the first select element is: " . $selectedText . "\n\n";
} else {
    echo "No option is selected or the select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>