<?php
// Scenario: Example of getting the width of an element by its number

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the width of an element by its number
$elementNumber = 0;

// Get the width of the first element (index 0)
$width = DOM::$anchor->get_width_by_number($elementNumber);

if ($width !== -1) {
    echo "Width of element number $elementNumber: $width pixels\n\n";
} else {
    echo "Failed to get width of element number $elementNumber\n\n";
}

// Example 2: Get the width of another element by its number
$elementNumber = 1;

// Get the width of the second element (index 1)
$width = DOM::$anchor->get_width_by_number($elementNumber);

if ($width !== -1) {
    echo "Width of element number $elementNumber: $width pixels\n\n";
} else {
    echo "Failed to get width of element number $elementNumber\n\n";
}

// Example 3: Get the width of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0;

// Get the width of the first element (index 0) within the first frame
$width = DOM::$anchor->get_width_by_number($elementNumber, 0);

if ($width !== -1) {
    echo "Width of element number $elementNumber in frame 0: $width pixels\n\n";
} else {
    echo "Element number $elementNumber not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();