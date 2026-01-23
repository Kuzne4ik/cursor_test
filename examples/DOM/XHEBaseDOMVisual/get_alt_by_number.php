<?php
// Scenario: Example of getting an element's alt attribute by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with image elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get alt attribute of first image element
$imageNumber = 0;

// Get alt attribute of first image
$altValue = DOM::$image->get_alt_by_number($imageNumber);

if ($altValue !== "") {
    echo "Alt attribute of image number $imageNumber: $altValue\n\n";
} else {
    echo "Failed to get alt attribute of image number $imageNumber\n\n";
}

// Example 2: Get alt attribute of second image image
$imageNumber = 1;

// Get alt attribute of second image image
$altValue = DOM::$image->get_alt_by_number($imageNumber);

if ($altValue !== "") {
    echo "Alt attribute of image number $imageNumber: $altValue\n\n";
} else {
    echo "Failed to get alt attribute of image number $imageNumber\n\n";
}

// Example 3: Get alt attribute of image within a specific frame
// This example assumes there is a frame with index 0 on the page
$imageNumber = 0;

// Get alt attribute of first image image within the first frame
$altValue = DOM::$image->get_alt_by_number($imageNumber, 0);

if ($altValue !== "") {
    echo "Alt attribute of image number $imageNumber in frame 0: $altValue\n\n";
} else {
    echo "image number $imageNumber not found in frame 0 or does not have an alt attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();