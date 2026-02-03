<?php
// Scenario: Example of getting the height of an element by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with named elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the height of an anchor by its name attribute
$anchorName = "mouseover1";

// Get the height of the anchor with name="mouseover1"
$height = DOM::$anchor->get_height_by_name($anchorName);

if ($height !== -1) {
    echo "Height of anchor with name '$anchorName': $height pixels\n\n";
} else {
    echo "Failed to get height of anchor with name '$anchorName'\n\n";
}

// Example 2: Get the height of another anchor by its name attribute
$anchorName = "onclick1";

// Get the height of the anchor with name="onclick1"
$height = DOM::$anchor->get_height_by_name($anchorName);

if ($height !== -1) {
    echo "Height of anchor with name '$anchorName': $height pixels\n\n";
} else {
    echo "Failed to get height of anchor with name '$anchorName'\n\n";
}

// Example 3: Get the height of a non-existent anchor
$anchorName = "nonexistent_anchor";

// Try to get the height of a non-existent anchor
$height = DOM::$anchor->get_height_by_name($anchorName);

if ($height !== -1) {
    echo "Height of anchor with name '$anchorName': $height pixels\n\n";
} else {
    echo "anchor with name '$anchorName' not found\n\n";
}

// Example 4: Get the height of an anchor within a specific frame
// This example assumes there is a frame with index 0 on the page
$anchorName = "f0_mouseover1";

// Get the height of the anchor with name="f0_mouseover1" within the first frame
$height = DOM::$anchor->get_height_by_name($anchorName, 0);

if ($height !== -1) {
    echo "Height of anchor with name '$anchorName' in frame 0: $height pixels\n\n";
} else {
    echo "anchor with name '$anchorName' not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();