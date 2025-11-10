<?php
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a select element
WEB::$browser->navigate("https://example.com/form-with-select");

// Wait for the page to load
WEB::$browser->wait_for();

// Select an option by its text content in a select element found by number
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $text: The text content of the option to select
// - $exactly: Whether to match the text exactly (true) or partially (false)
$success = DOM::$listbox->select_text_by_number(0, "Canada");

if ($success) {
    echo "Successfully selected the option with text 'Canada' in the first select element\n\n";
} else {
    echo "Failed to select the option or the select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>