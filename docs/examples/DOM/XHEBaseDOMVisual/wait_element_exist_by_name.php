<?php
// Scenario: Wait for a DOM element to exist by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for an input element with name "search" to exist on the page
$elementExists = DOM::$element->wait_element_exist_by_name("search");

if ($elementExists) {
    echo "Element with name 'search' exists on the page\n";
} else {
    echo "Element with name 'search' does not exist on the page\n";
}

// Example with frame parameter - wait for an element with name "search" in frame 0
$elementExistsInFrame = DOM::$element->wait_element_exist_by_name("search", "0");

if ($elementExistsInFrame) {
    echo "Element with name 'search' exists in frame 0\n";
} else {
    echo "Element with name 'search' does not exist in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();