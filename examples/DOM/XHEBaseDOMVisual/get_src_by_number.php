<?php
// Scenario: Example of getting an element's src attribute by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with image elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get src attribute of the first image element
$elementNumber = 0;

// Get the src attribute of the first image element
$srcValue = DOM::$image->get_src_by_number($elementNumber);

if ($srcValue !== "") {
    echo "Src attribute of element number $elementNumber: $srcValue\n\n";
} else {
    echo "Failed to get src attribute of element number $elementNumber\n\n";
}

// Example 2: Get src attribute of the second image element
$elementNumber = 1;

// Get the src attribute of the second image element
$srcValue = DOM::$image->get_src_by_number($elementNumber);

if ($srcValue !== "") {
    echo "Src attribute of element number $elementNumber: $srcValue\n\n";
} else {
    echo "Failed to get src attribute of element number $elementNumber\n\n";
}

// Example 3: Get src attribute of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0;

// Get the src attribute of the first image element within the first frame
$srcValue = DOM::$image->get_src_by_number($elementNumber, 0);

if ($srcValue !== "") {
    echo "Src attribute of element number $elementNumber in frame 0: $srcValue\n\n";
} else {
    echo "Element number $elementNumber not found in frame 0 or does not have a src attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();