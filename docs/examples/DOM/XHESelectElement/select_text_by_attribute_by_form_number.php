<?php
// Scenario: Demonstrates how to select an option by text in a select element found by attribute within a form by number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select an option by text in a select element within a form, found by attribute and form number
// Parameters:
// - $attr_name: The name of attribute to search by (e.g., "id", "class")
// - $attr_value: The value of attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $text: The text content of the option to select
// - $text_exactly: Whether to match the text exactly (true) or partially (false)
// - $form_number: The number of the form on the page (0-based)
$success = DOM::$listbox->select_text_by_attribute_by_form_number("name", "contries", true, "Canada", true, 0, -1);

if ($success) {
    echo "Successfully selected the option with text 'Canada' in the select element with name 'contries' within form 0\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' in form 0 was not found\n\n";
}

// Select an option by text in a select element within a form, found by attribute and form number with frame parameter
// Parameters:
// - $attr_name: The name of attribute to search by (e.g., "id", "class")
// - $attr_value: The value of attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $text: The text content of the option to select
// - $text_exactly: Whether to match the text exactly (true) or partially (false)
// - $form_number: The number of the form on the page (0-based)
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->select_text_by_attribute_by_form_number("name", "contries", true, "USA", true, 0, 0);

if ($successWithFrame) {
    echo "Successfully selected the option with text 'USA' in the select element with name 'contries' within form 0 in frame 0\n\n";
} else {
    echo "Failed to select the option or the select element with name 'contries' in form 0 was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>