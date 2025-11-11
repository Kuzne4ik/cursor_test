<?php
// Scenario: Get value of a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get value of the first input element on the page
$value = DOM::$element->get_value_by_number(0);

if ($value !== false) {
    echo "Value of element with number 0: " . $value . "\n";
} else {
    echo "Failed to get value of element with number 0\n";
}

// Example with frame parameter - get value of the first element in frame 0
$valueInFrame = DOM::$element->get_value_by_number(0, "0");

if ($valueInFrame !== false) {
    echo "Value of element with number 0 in frame 0: " . $valueInFrame . "\n";
} else {
    echo "Failed to get value of element with number 0 in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();