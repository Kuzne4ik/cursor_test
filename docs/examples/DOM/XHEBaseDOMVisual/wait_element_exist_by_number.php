<?php
// Scenario: Wait for a DOM element to exist by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for the first input element to exist on the page
$elementExists = DOM::$element->wait_element_exist_by_number(0);

if ($elementExists) {
    echo "Element with number 0 exists on the page\n";
} else {
    echo "Element with number 0 does not exist on the page\n";
}

// Example with frame parameter - wait for the first element in frame 0
$elementExistsInFrame = DOM::$element->wait_element_exist_by_number(0, "0");

if ($elementExistsInFrame) {
    echo "Element with number 0 exists in frame 0\n";
} else {
    echo "Element with number 0 does not exist in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();