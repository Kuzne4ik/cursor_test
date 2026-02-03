<?php
// Scenario: Example of getting numbers of child elements by parent element ID
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with parent and child elements
WEB::$browser->navigate(TEST_POLYGON_URL . "children.html");

// Example 1: Basic usage - get numbers of child elements by parent element ID
$parentElementId = "parent_main";

// Get numbers of child elements of the element with id="main_container"
$childNumbers = DOM::$div->get_numbers_child_by_id($parentElementId, 'div');

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element with id '$parentElementId': $childNumbers\n\n";
} else {
    echo "Failed to get child numbers of parent element with id '$parentElementId'\n\n";
}

// Example 2: Get numbers of child elements of another parent element
$parentElementId = "ch1";

// Get numbers of child elements of the element with id="content_wrapper"
$childNumbers = DOM::$div->get_numbers_child_by_id($parentElementId, 'div');

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element with id '$parentElementId': $childNumbers\n\n";
} else {
    echo "Failed to get child numbers of parent element with id '$parentElementId'\n\n";
}

// Example 3: Get numbers of child elements of a parent element within a specific frame
// This example assumes there is a frame with index 0 on the page
$parentElementId = "parent_frame";

// Get numbers of child elements of the element with id="frame_container" within the first frame
$childNumbers = DOM::$div->get_numbers_child_by_id($parentElementId, 'div', 0);

if ($childNumbers !== "") {
    echo "Numbers of child elements of parent element with id '$parentElementId' in frame 0: $childNumbers\n\n";
} else {
    echo "Parent element with id '$parentElementId' not found in frame 0 or has no children\n\n";
}

// Quit the application
WINDOW::$app->quit();