<?php
// Scenario: Get all text options from a select element by its number
// Description: Demonstrates how to retrieve all text content from a select element based on its position number on the page
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

// Get all the text values of options in a select element found by number
// The parameter is the number of the select element on the page (0-based)
// Returns a string with all option texts separated by "\n[br]\n"
$allTexts = DOM::$listbox->get_all_texts_by_number(0, -1);

if ($allTexts) {
    echo "All option texts in the first select element:\n";
    echo $allTexts . "\n\n";
} else {
    echo "The select element was not found\n\n";
}

// Get all the text values of options in a select element found by number with frame parameter
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $frame: The frame number where the element is located (0-based)
// Returns a string with all option texts separated by "\n[br]\n"
$allTextsWithFrame = DOM::$listbox->get_all_texts_by_number(0, 0);

if ($allTextsWithFrame) {
    echo "All option texts in the first select element in frame 0:\n";
    echo $allTextsWithFrame . "\n\n";
} else {
    echo "The select element was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>