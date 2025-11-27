<?php
// Scenario: Example of getting numbers of child elements by parent element number

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with parent and child elements
WEB::$browser->navigate(TEST_POLYGON_URL . "children.html");

// Example 1: Basic usage - get numbers of child elements by parent element number
$parentElementNumber = 0; // First element on the page (e.g., a table)

// Get numbers of child elements of the first element
$childNumbers = DOM::$div->get_numbers_child_by_number($parentElementNumber, 'div');

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element #$parentElementNumber: $childNumbers\n\n";
} else {
    echo "Failed to get child numbers of parent element #$parentElementNumber\n\n";
}

// Example 2: Get numbers of child elements of another parent element
$parentElementNumber = 1; // Second element on the page

// Get numbers of child elements of the second element
$childNumbers = DOM::$div->get_numbers_child_by_number($parentElementNumber, 'div');

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element #$parentElementNumber: $childNumbers\n\n";
} else {
    echo "Failed to get child numbers of parent element #$parentElementNumber\n\n";
}

// Example 3: Get numbers of child elements of a parent element within a specific frame
// This example assumes there is a frame with index 0 on the page
$parentElementNumber = 0; // First element in the frame

// Get numbers of child elements of the first element within the first frame
$childNumbers = DOM::$div->get_numbers_child_by_number($parentElementNumber, 'div', 0);

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element #$parentElementNumber in frame 0: $childNumbers\n\n";
} else {
    echo "Parent element #$parentElementNumber not found in frame 0 or has no children\n\n";
}

// Quit the application
WINDOW::$app->quit();