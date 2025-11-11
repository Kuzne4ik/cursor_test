<?php
// Scenario: Demonstrates how to get all text options from a select element found by name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for the page to load
WEB::$browser->wait_js();

// Get all the text values of options in a select element found by its name attribute
// The parameter is the name attribute of the select element
// Returns a string with all option texts separated by "<br>"
$allTexts = DOM::$listbox->get_all_texts_by_name("contries", -1);

if ($allTexts) {
    echo "All option texts in the select element with name 'contries':\n";
    echo $allTexts . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Get all the text values of options in a select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of the select element
// - $frame: The frame number where the element is located (0-based)
// Returns a string with all option texts separated by "<br>"
$allTextsWithFrame = DOM::$listbox->get_all_texts_by_name("contries", 0);

if ($allTextsWithFrame) {
    echo "All option texts in the select element with name 'contries' in frame 0:\n";
    echo $allTextsWithFrame . "\n\n";
} else {
    echo "The select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>