<?php
// Scenario: Get inner HTML of a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get inner HTML of the first element on the page
$innerHtml = DOM::$element->get_inner_html_by_number(0);

if ($innerHtml !== false) {
    echo "Inner HTML of element with number 0: " . $innerHtml . "\n";
} else {
    echo "Failed to get inner HTML of element with number 0\n";
}

// Example with frame parameter - get inner HTML of the first element in frame 0
$innerHtmlInFrame = DOM::$element->get_inner_html_by_number(0, "0");

if ($innerHtmlInFrame !== false) {
    echo "Inner HTML of element with number 0 in frame 0: " . $innerHtmlInFrame . "\n";
} else {
    echo "Failed to get inner HTML of element with number 0 in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();