<?php
// Scenario: Set value of a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Set value of the first input element on the page
$success = DOM::$element->set_value_by_number(0, "test value");

if ($success) {
    echo "Successfully set value of element with number 0\n";
} else {
    echo "Failed to set value of element with number 0\n";
}

// Example with frame parameter - set value of the first element in frame 0
$successInFrame = DOM::$element->set_value_by_number(0, "test value in frame", "0");

if ($successInFrame) {
    echo "Successfully set value of element with number 0 in frame 0\n";
} else {
    echo "Failed to set value of element with number 0 in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();