<?php
// Scenario: This example demonstrates how to use the get_by_value function to find DOM elements by their value attribute.
// The function allows searching for elements by their value with exact or partial matching, and within specific frames.

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements having value attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");
WEB::$browser->wait_for();

// Example 1: Get element by exact value match
echo "\n\nExample 1: Get element by exact value match";
$value = "Male";
$findedElement = DOM::$input->get_by_value($value, true);

// Check if element exists
if ($findedElement->is_exist()) {
    echo "\nElement with exact value '{$value}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $findedElement->get_tag();
    echo "\nElement value attribute: " . $findedElement->get_value();
    echo "\nElement name attribute: " . $findedElement->get_name();
} else {
    echo "\nElement with exact value '{$value}' not found";
}

// Example 2: Get element by partial value match
echo "\n\nExample 2: Get element by partial value match";
$partialValue = "Запись";
$findedElement = DOM::$input->get_by_value($partialValue, false);

// Check if element exists
if ($findedElement->is_exist()) {
    echo "\nElement with partial value '{$partialValue}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $findedElement->get_tag();
    echo "\nElement value attribute: " . $findedElement->get_value();
    echo "\nElement name attribute: " . $findedElement->get_name();
} else {
    echo "\nElement with partial value '{$partialValue}' not found";
}

// Example 3: Get element by value within a specific frame (frame=0)
echo "\n\nExample 3: Get element by value within a specific frame (frame=0)";
$frameValue = "Вася Пупкин";
$findedElement = DOM::$element->get_by_value($frameValue, true, "0");

// Check if element exists
if ($findedElement->is_exist()) {
    echo "\nElement with value '{$frameValue}' found in frame 0";
    // Get and display element details
    echo "\nElement tag: " . $findedElement->get_tag();
    echo "\nElement value attribute: " . $findedElement->get_value();
    echo "\nElement name attribute: " . $findedElement->get_name();
} else {
    echo "\nElement with value '{$frameValue}' not found in frame 0";
}

// Quit the application
WINDOW::$app->quit();