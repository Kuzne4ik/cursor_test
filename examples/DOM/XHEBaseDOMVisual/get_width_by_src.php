<?php
// Scenario: Example of getting the width of an element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with images or elements that have src attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get the width of an element by its src attribute
$srcValue = "./screenshots/01.jpg";

// Get the width of the element with src="./screenshots/01.jpg"
$width = DOM::$image->get_width_by_src($srcValue);

if ($width !== -1) {
    echo "Width of element with src '$srcValue': $width pixels\n\n";
} else {
    echo "Failed to get width of element with src '$srcValue'\n\n";
}

// Example 2: Get the width of another element by its src attribute
$srcValue = "./screenshots/02.jpg";

// Get the width of the element with src="./screenshots/02.jpg"
$width = DOM::$image->get_width_by_src($srcValue);

if ($width !== -1) {
    echo "Width of element with src '$srcValue': $width pixels\n\n";
} else {
    echo "Failed to get width of element with src '$srcValue'\n\n";
}

// Example 3: Get the width of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$srcValue = "./screenshots/01.jpg";

// Get the width of the element with src="./screenshots/01.jpg" within the first frame
$width = DOM::$image->get_width_by_src($srcValue, 0);

if ($width !== -1) {
    echo "Width of element with src '$srcValue' in frame 0: $width pixels\n\n";
} else {
    echo "Element with src '$srcValue' not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();