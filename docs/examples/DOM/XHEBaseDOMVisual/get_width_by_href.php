<?php
// Scenario: Example of getting the width of an element by its href attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with links
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the width of an element by its href attribute
$hrefValue = "https://example.com/mouseover1";

// Get the width of the element with href="https://example.com/mouseover1"
$width = DOM::$anchor->get_width_by_href($hrefValue, false);

if ($width !== -1) {
    echo "Width of element with href '$hrefValue': $width pixels\n\n";
} else {
    echo "Failed to get width of element with href '$hrefValue'\n\n";
}

// Example 2: Get the width of another element by its href attribute
$hrefValue = "https://example.com/onclick1";

// Get the width of the element containing href="https://example.com/onclick1"
$width = DOM::$anchor->get_width_by_href($hrefValue, false);

if ($width !== -1) {
    echo "Width of element with href '$hrefValue': $width pixels\n\n";
} else {
    echo "Failed to get width of element with href '$hrefValue'\n\n";
}

// Example 3: Get the width of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$hrefValue = "https://example.com/frame0/mouseover1";

// Get the width of the element containing href="https://example.com/frame0/mouseover1" within the first frame
$width = DOM::$anchor->get_width_by_href($hrefValue, false, 0);

if ($width !== -1) {
    echo "Width of element with href '$hrefValue' in frame 0: $width pixels\n\n";
} else {
    echo "Element with href '$hrefValue' not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();