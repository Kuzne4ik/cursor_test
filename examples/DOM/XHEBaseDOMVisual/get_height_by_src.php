<?php
// Scenario: Example of getting the height of an element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with images that have src attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get the height of an image by its src attribute
$srcValue = "./screenshots/01.jpg";

// Get the height of the image with src="./screenshots/01.jpg"
$height = DOM::$image->get_height_by_src($srcValue);

if ($height !== -1) {
    echo "Height of image with src '$srcValue': $height pixels\n\n";
} else {
    echo "Failed to get height of image with src '$srcValue'\n\n";
}

// Example 2: Get the height of another image by its src attribute
$srcValue = "./screenshots/02.jpg";

// Get the height of the image with src="./screenshots/02.jpg"
$height = DOM::$image->get_height_by_src($srcValue);

if ($height !== -1) {
    echo "Height of image with src '$srcValue': $height pixels\n\n";
} else {
    echo "Failed to get height of image with src '$srcValue'\n\n";
}

// Example 3: Get the height of an image within a specific frame
// This example assumes there is a frame with index 0 on the page
$srcValue = "./screenshots/01.jpg";

// Get the height of the image with src="./screenshots/01.jpg" within the first frame
$height = DOM::$image->get_height_by_src($srcValue, 0);

if ($height !== -1) {
    echo "Height of image with src '$srcValue' in frame 0: $height pixels\n\n";
} else {
    echo "Image with src '$srcValue' not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();