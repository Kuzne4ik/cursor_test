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

// Get all the text values of options in a select element found by number
// The parameter is the number of the select element on the page (0-based)
// Returns a string with all option texts separated by "\n[br]\n"
$allTexts = DOM::$listbox->get_all_texts_by_number(0);

if ($allTexts !== false) {
    echo "All option texts in the first select element:\n";
    echo $allTexts . "\n\n";
} else {
    echo "The select element was not found\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>