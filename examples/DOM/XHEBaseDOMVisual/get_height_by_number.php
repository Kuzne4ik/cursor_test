<?php
// Scenario: Example of getting the height of an element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the height of an anchor by its number
$anchorNumber = 0;

// Get the height of the first anchor (index 0)
$height = DOM::$anchor->get_height_by_number($anchorNumber);

if ($height !== -1) {
    echo "Height of anchor number $anchorNumber: $height pixels\n\n";
} else {
    echo "Failed to get height of anchor number $anchorNumber\n\n";
}

// Example 2: Get the height of another anchor by its number
$anchorNumber = 1;

// Get the height of the second anchor (index 1)
$height = DOM::$anchor->get_height_by_number($anchorNumber);

if ($height !== -1) {
    echo "Height of anchor number $anchorNumber: $height pixels\n\n";
} else {
    echo "Failed to get height of anchor number $anchorNumber\n\n";
}

// Example 3: Get the height of an anchor within a specific frame
// This example assumes there is a frame with index 0 on the page
$anchorNumber = 0;

// Get the height of the first anchor (index 0) within the first frame
$height = DOM::$anchor->get_height_by_number($anchorNumber, 0);

if ($height !== -1) {
    echo "Height of anchor number $anchorNumber in frame 0: $height pixels\n\n";
} else {
    echo "anchor number $anchorNumber not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();