<?php
// Scenario: Check if a DOM element exists by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Check if the first input element exists on the page
$exists = DOM::$element->is_exist_by_number(0);

if ($exists) {
    echo "Element with number 0 exists on the page\n";
} else {
    echo "Element with number 0 does not exist on the page\n";
}

// Example with frame parameter - check if the first element exists in frame 0
$existsInFrame = DOM::$element->is_exist_by_number(0, "0");

if ($existsInFrame) {
    echo "Element with number 0 exists in frame 0\n";
} else {
    echo "Element with number 0 does not exist in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();