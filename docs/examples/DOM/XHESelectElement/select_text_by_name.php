<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Select an option by its text content in a select element found by its name attribute
// Parameters:
// - $name: The name attribute of the select element
// - $text: The text content of the option to select
// - $exactly: Whether to match the text exactly (true) or partially (false)
$success = DOM::$listbox->select_text_by_name("contries", "Canada", true, -1);

if ($success) {
    echo "Successfully selected the option with text 'Canada' in the select element with name 'contries'\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' was not found\n\n";
}

// Select an option by its text content in a select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of the select element
// - $text: The text content of the option to select
// - $exactly: Whether to match the text exactly (true) or partially (false)
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->select_text_by_name("contries", "USA", true, 0);

if ($successWithFrame) {
    echo "Successfully selected the option with text 'USA' in the select element with name 'contries' in frame 0\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>