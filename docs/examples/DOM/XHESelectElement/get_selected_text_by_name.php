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

// Get the text of the selected option in a select element found by its name attribute
// The parameter is the name attribute of the select element
$selectedText = DOM::$listbox->get_selected_text_by_name("country_select");

if ($selectedText !== false) {
    echo "The text of the selected option in the select element with name 'country_select' is: " . $selectedText . "\n\n";
} else {
    echo "No option is selected or the select element with name 'country_select' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>