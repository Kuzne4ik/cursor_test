<?php
// Scenario: Example of getting height of element by its href attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with links
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get height of an anchor by its href attribute
$hrefValue = "https://example.com";

// Get height of anchor with href="https://example.com"
$height = DOM::$anchor->get_height_by_href($hrefValue);

if ($height !== -1) {
    echo "Height of anchor with href '$hrefValue': $height pixels\n\n";
} else {
    echo "Failed to get height of anchor with href '$hrefValue'\n\n";
}

// Example 2: Get height of another anchor by its href attribute
$hrefValue = "/about.html";

// Get height of anchor with href="/about.html"
$height = DOM::$anchor->get_height_by_href($hrefValue);

if ($height !== -1) {
    echo "Height of anchor with href '$hrefValue': $height pixels\n\n";
} else {
    echo "Failed to get height of anchor with href '$hrefValue'\n\n";
}

// Quit application
WINDOW::$app->quit();