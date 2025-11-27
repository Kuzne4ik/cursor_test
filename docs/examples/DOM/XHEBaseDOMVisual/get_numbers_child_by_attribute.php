<?php
// Scenario: Example of getting numbers of child elements by parent element attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with parent and child elements
WEB::$browser->navigate(TEST_POLYGON_URL . "children.html");

// Example 1: Basic usage - get numbers of child elements by parent element attribute
$attrName = "data-parent";
$attrValue = "root";

// Get numbers of child elements of the element with class="container"
$childNumbers = DOM::$div->get_numbers_child_by_attribute($attrName, $attrValue, true,  'div');

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element with $attrName='$attrValue': $childNumbers\n\n";
} else {
    echo "Failed to get child numbers of parent element with $attrName='$attrValue'\n\n";
}

// Example 2: Get numbers of child elements of another parent element
$attrName = "id";
$attrValue = "parent_main";

// Get numbers of child elements of the element with role="main"
$childNumbers = DOM::$div->get_numbers_child_by_attribute($attrName, $attrValue, true,  'div');

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element with $attrName='$attrValue': $childNumbers\n\n";
} else {
    echo "Failed to get child numbers of parent element with $attrName='$attrValue'\n\n";
}

// Example 3: Get numbers of child elements of a parent element within a specific frame
// This example assumes there is a frame with index 0 on the page
$attrName = "name";
$attrValue = "parent_frame";

// Get numbers of child elements of the element with class="frame-container" within the first frame
$childNumbers = DOM::$div->get_numbers_child_by_attribute($attrName, $attrValue, true,  'div', 0);

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element with $attrName='$attrValue' in frame 0: $childNumbers\n\n";
} else {
    echo "Parent element with $attrName='$attrValue' not found in frame 0 or has no children\n\n";
}

// Quit the application
WINDOW::$app->quit();