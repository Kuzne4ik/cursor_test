<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Find the select element by name and select option by index
// The first parameter is the name attribute of the select element
// The second parameter is the index of the option to select (0-based)
$success = DOM::$listbox->select_index_by_name("contries", 2);

if ($success) {
    echo "Successfully selected option at index 2 in the select element with name 'contries'\n\n";
} else {
    echo "Failed to select option\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>