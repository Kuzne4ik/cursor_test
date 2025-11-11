<?php
// Scenario: Examples demonstrating the usage of the frame argument for XHE classes DOM elements

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with frame elements
WEB::$browser->navigate(TEST_POLYGON_URL . "frame.html");
WEB::$browser->wait_js();

// Example 1: Default frame usage (frame = -1)
// If the frame argument is not used in code, then the value of the frame argument is -1 by default
// This means the search will be performed on the main page, without considering frames
$element = DOM::$button->get_by_attribute('id', 'bt1');

if ($element->is_exist()) {
    echo "\n\nFound element on the main page (default frame = -1)\n";
    echo "Element value: " . $element->get_value() . "\n";
} else {
    echo "\n\nElement not found on the main page\n";
}

// Example 2: Search in a frame by number
// If the frame argument is used to search for a frame by number, then the value of the frame argument 
// is the ordinal number of an element of that type on the page, where the frame number is an integer (0-based)
$element_in_first_frame = DOM::$button->get_by_attribute('id', 'bt1', false, 0);

if ($element_in_first_frame->is_exist()) {
    echo "\n\nFound element in the first frame (frame = 0)\n";
    echo "Element value: " . $element_in_first_frame->get_value() . "\n";
} else {
    echo "\n\nElement not found in the first frame\n";
}

// Example 3: Search in a nested frame
// If the frame argument is used, but the frame being search for is child of another frame, 
// then the value of the frame argument is a colon-separated string of ordinal numbers of elements of that type
// First frame number value is number on the page and second one as child number in parent frame
$element_in_nested_frame = DOM::$button->get_by_attribute('id', 'bt', false, "0:0");

if ($element_in_nested_frame->is_exist()) {
    echo "\n\nFound element in a nested frame (frame = \"0:0\")\n";
    echo "Element value: " . $element_in_nested_frame->get_value() . "\n";
} else {
    echo "\n\nElement not found in the nested frame\n";
}

// Example 4: Search in a deeply nested frame
$element_in_deeply_nested_frame = DOM::$button->get_by_attribute('id', 'bt1', false, "0:0:0");

if ($element_in_deeply_nested_frame->is_exist()) {
    echo "\n\nFound element in a deeply nested frame (frame = \"0:0:0\")\n";
    echo "Element value: " . $element_in_deeply_nested_frame->get_value() . "\n";
} else {
    echo "\n\nElement not found in the deeply nested frame\n";
}

// Example 5: Using frame argument with other element types
$input_in_frame = DOM::$input->get_by_attribute('id', 'result', false, 0);

if ($input_in_frame->is_exist()) {
    echo "\n\nFound input in the first frame (frame = 0)\n";
    echo "Input placeholder: " . $input_in_frame->get_attribute('placeholder') . "\n";
} else {
    echo "\n\nInput not found in the first frame\n";
}


// Quit the application
WINDOW::$app->quit();