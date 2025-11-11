<?php
// Scenario: Get value of a DOM element by its attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get value of an element with attribute "type" and value "text"
$value = DOM::$element->get_value_by_attribute("type", "text");

if ($value !== false) {
    echo "Value of element with attribute 'type=text': " . $value . "\n";
} else {
    echo "Failed to get value of element with attribute 'type=text'\n";
}

// Example with exact match parameter - get value of an element with exact attribute match
$valueExact = DOM::$element->get_value_by_attribute("type", "text", true);

if ($valueExact !== false) {
    echo "Value of element with exact attribute 'type=text': " . $valueExact . "\n";
} else {
    echo "Failed to get value of element with exact attribute 'type=text'\n";
}

// Example with frame parameter - get value of an element with attribute in frame 0
$valueInFrame = DOM::$element->get_value_by_attribute("type", "text", true, "0");

if ($valueInFrame !== false) {
    echo "Value of element with attribute 'type=text' in frame 0: " . $valueInFrame . "\n";
} else {
    echo "Failed to get value of element with attribute 'type=text' in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();