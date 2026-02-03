<?php
// Scenario: Get text of selected option in a select element by its attribute
// Description: Demonstrates how to retrieve text content of currently selected option from a select element based on its attribute
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

// Get the text of the selected option in a select element found by its attribute
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
$selectedText = DOM::$listbox->get_selected_text_by_attribute("name", "contries", true);

if ($selectedText !== false) {
    echo "The text of the selected option in the select element with name 'contries' is: " . $selectedText . "\n\n";
} else {
    echo "No option is selected or the select element with name 'contries' was not found\n\n";
}

// Get the text of the selected option in a select element found by its attribute with frame parameter
// Parameters:
// - $attr_name: The name of the attribute to search by (e.g., "id", "class")
// - $attr_value: The value of the attribute to match
// - $exactly: Whether to match the attribute value exactly (true) or partially (false)
// - $frame: The frame number where the element is located (0-based)
$selectedTextWithFrame = DOM::$listbox->get_selected_text_by_attribute("name", "contries", true, 0);

if ($selectedTextWithFrame !== false) {
    echo "The text of the selected option in the select element with name 'contries' in frame 0 is: " . $selectedTextWithFrame . "\n\n";
} else {
    echo "No option is selected or the select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>