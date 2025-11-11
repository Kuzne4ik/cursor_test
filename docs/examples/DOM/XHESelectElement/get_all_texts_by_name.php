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
$allTexts = DOM::$listbox->get_all_texts_by_name("contries");

if ($allTexts !== false) {
    echo "All option texts in the select element with name 'contries':\n";
    echo $allTexts . "\n\n";
} else {
    echo "The select element with name 'contries' was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>