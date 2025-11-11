<?php
// Scenario: Get all attributes of a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get all attributes of the first element on the page
$attributes = DOM::$element->get_all_attributes_by_number(0);

if ($attributes !== false) {
    echo "All attributes of element with number 0:\n";
    echo $attributes . "\n";
} else {
    echo "Failed to get all attributes of element with number 0\n";
}

// Example with frame parameter - get all attributes of the first element in frame 0
$attributesInFrame = DOM::$element->get_all_attributes_by_number(0, "0");

if ($attributesInFrame !== false) {
    echo "All attributes of element with number 0 in frame 0:\n";
    echo $attributesInFrame . "\n";
} else {
    echo "Failed to get all attributes of element with number 0 in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();