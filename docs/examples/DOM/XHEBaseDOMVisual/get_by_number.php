<?php
// Scenario: Get a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get the first element on the page
$element = DOM::$element->get_by_number(0);

if ($element->is_exist()) {
    echo "Element with number 0 exists\n";
    echo "Element inner number: " . $element->inner_number . "\n";
} else {
    echo "Element with number 0 does not exist\n";
}

// Example with frame parameter - get the first element in frame 0
$elementInFrame = DOM::$element->get_by_number(0, "0");

if ($elementInFrame->is_exist()) {
    echo "Element with number 0 exists in frame 0\n";
    echo "Element inner number: " . $elementInFrame->inner_number . "\n";
} else {
    echo "Element with number 0 does not exist in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();