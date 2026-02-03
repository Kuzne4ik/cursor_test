<?php
// Scenario: Example of getting all attributes of an element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having src attributes
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to image.html\n";


    echo "Page loaded successfully\n";

    // Example 1: Basic usage - get all attributes of an element by its src attribute
    $srcValue = "./screenshots/01.jpg";

    // Get all attributes of the image with src="./screenshots/01.jpg"
    $attributes = DOM::$image->get_all_attributes_by_src($srcValue);

    // Check if the operation was successful
    if ($attributes) {
        echo "Successfully retrieved attributes for image with src '$srcValue'\n";
        echo "All attributes of image with src '$srcValue': $attributes\n\n";
    } else {
        echo "Failed to get attributes of image with src '$srcValue'\n\n";
    }

    // Example 2: Get all attributes of another image by its src attribute
    $srcValue = "./screenshots/02.jpg";

    // Get all attributes of the image with src="./screenshots/02.jpg"
    $attributes = DOM::$image->get_all_attributes_by_src($srcValue);

    // Check if the operation was successful
    if ($attributes) {
        echo "Successfully retrieved attributes for image with src '$srcValue'\n";
        echo "All attributes of image with src '$srcValue': $attributes\n\n";
    } else {
        echo "Failed to get attributes of image with src '$srcValue'\n\n";
    }

    // Example 3: Get all attributes of an image within a specific frame
    // This example assumes there is a frame with index 0 on the page
    $srcValue = "./screenshots/frame_image.jpg";

    // Check if frame exists first
    $frameExists = DOM::$frame->is_exist_by_number(0);

    if ($frameExists) {
        echo "Frame 0 exists\n";

        // Get all attributes of an image within the first frame
        $attributes = DOM::$image->get_all_attributes_by_src($srcValue, 0);

        // Check if the operation was successful
        if ($attributes) {
            echo "Successfully retrieved attributes for image with src '$srcValue' in frame 0\n";
            echo "All attributes of image with src '$srcValue' in frame 0: $attributes\n\n";
        } else {
            echo "image with src '$srcValue' not found in frame 0 or has no attributes\n\n";
        }
    } else {
        echo "Frame 0 does not exist\n";
    }
} else {
    echo "Failed to navigate to image.html\n";
}

// Quit the application
WINDOW::$app->quit();