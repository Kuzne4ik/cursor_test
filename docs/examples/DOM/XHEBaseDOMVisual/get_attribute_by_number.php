<?php
// Scenario: Get attribute value of a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get 'type' attribute of the first input element on the page
$attributeValue = DOM::$element->get_attribute_by_number(0, "type");

if ($attributeValue !== false) {
    echo "Attribute 'type' of element with number 0: " . $attributeValue . "\n";
} else {
    echo "Failed to get attribute 'type' of element with number 0\n";
}

// Get 'name' attribute of the first input element on the page
$nameValue = DOM::$element->get_attribute_by_number(0, "name");

if ($nameValue !== false) {
    echo "Attribute 'name' of element with number 0: " . $nameValue . "\n";
} else {
    echo "Failed to get attribute 'name' of element with number 0\n";
}

// Example with frame parameter - get attribute of the first element in frame 0
$attributeInFrame = DOM::$element->get_attribute_by_number(0, "type", "0");

if ($attributeInFrame !== false) {
    echo "Attribute 'type' of element with number 0 in frame 0: " . $attributeInFrame . "\n";
} else {
    echo "Failed to get attribute 'type' of element with number 0 in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();