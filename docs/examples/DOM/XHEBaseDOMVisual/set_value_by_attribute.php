<?php
// Scenario: Set value of a DOM element by its attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Set value of an element with attribute "type" and value "text"
$success = DOM::$element->set_value_by_attribute("type", "text", false, "new value");

if ($success) {
    echo "Successfully set value of element with attribute 'type=text'\n";
} else {
    echo "Failed to set value of element with attribute 'type=text'\n";
}

// Example with exact match parameter - set value of an element with exact attribute match
$successExact = DOM::$element->set_value_by_attribute("type", "text", true, "exact value");

if ($successExact) {
    echo "Successfully set value of element with exact attribute 'type=text'\n";
} else {
    echo "Failed to set value of element with exact attribute 'type=text'\n";
}

// Example with frame parameter - set value of an element with attribute in frame 0
$successInFrame = DOM::$element->set_value_by_attribute("type", "text", true, "frame value", "0");

if ($successInFrame) {
    echo "Successfully set value of element with attribute 'type=text' in frame 0\n";
} else {
    echo "Failed to set value of element with attribute 'type=text' in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();