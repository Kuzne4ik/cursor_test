<?php
// Scenario: Get inner text of a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get inner text of the first element on the page
$innerText = DOM::$element->get_inner_text_by_number(0);

if ($innerText !== false) {
    echo "Inner text of element with number 0: " . $innerText . "\n";
} else {
    echo "Failed to get inner text of element with number 0\n";
}

// Example with frame parameter - get inner text of the first element in frame 0
$innerTextInFrame = DOM::$element->get_inner_text_by_number(0, "0");

if ($innerTextInFrame !== false) {
    echo "Inner text of element with number 0 in frame 0: " . $innerTextInFrame . "\n";
} else {
    echo "Failed to get inner text of element with number 0 in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();