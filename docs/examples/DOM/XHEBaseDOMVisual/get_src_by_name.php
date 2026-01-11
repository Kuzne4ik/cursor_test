<?php
// Scenario: Example of getting an element's src attribute by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with image elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get src attribute of element by its name attribute
$elementName = "screen1";

// Get the src attribute of the image element with name="screen1"
$srcValue = DOM::$image->get_src_by_name($elementName);

if ($srcValue !== "") {
    echo "Src attribute of element with name '$elementName': $srcValue\n\n";
} else {
    echo "Failed to get src attribute of element with name '$elementName'\n\n";
}

// Example 2: Get src attribute of another element by its name attribute
$elementName = "screen2";

// Get the src attribute of the image element with name="screen2"
$srcValue = DOM::$image->get_src_by_name($elementName);

if ($srcValue !== "") {
    echo "Src attribute of element with name '$elementName': $srcValue\n\n";
} else {
    echo "Failed to get src attribute of element with name '$elementName'\n\n";
}

// Example 3: Get src attribute of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementName = "screen1";

// Get the src attribute of an image element within the first frame
$srcValue = DOM::$image->get_src_by_name($elementName, 0);

if ($srcValue !== "") {
    echo "Src attribute of element with name '$elementName' in frame 0: $srcValue\n\n";
} else {
    echo "Element with name '$elementName' not found in frame 0 or does not have a src attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();