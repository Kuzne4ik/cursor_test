<?php
// Scenario: Example of getting the Y coordinate of an element by its href attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with links
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the Y coordinate of an element by its href attribute
$hrefValue = "https://example.com/mouseover1";

// Get the Y coordinate of the element with href="https://example.com/mouseover1"
$yCoordinate = DOM::$anchor->get_y_by_href($hrefValue);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with href '$hrefValue': $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element with href '$hrefValue'\n\n";
}

// Example 2: Get the Y coordinate of another element
$hrefValue = "https://example.com/onclick1";

// Get the Y coordinate of the element containing href="https://example.com/onclick1"
$yCoordinate = DOM::$anchor->get_y_by_href($hrefValue, false);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with href '$hrefValue': $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element with href '$hrefValue'\n\n";
}

// Example 3: Get the Y coordinate of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$hrefValue = "https://example.com/frame0/mouseover1";

// Get the Y coordinate of the element containing href="https://example.com/frame0/mouseover1" within the first frame
$yCoordinate = DOM::$anchor->get_y_by_href($hrefValue, false, 0);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with href '$hrefValue' in frame 0: $yCoordinate\n\n";
} else {
    echo "Element with href '$hrefValue' not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();