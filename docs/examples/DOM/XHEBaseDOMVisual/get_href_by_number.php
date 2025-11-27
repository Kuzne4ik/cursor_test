<?php
// Scenario: Example of getting an element's href attribute by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get href attribute of the first anchor element
$elementNumber = 0;

// Get the href attribute of the first anchor element
$hrefValue = DOM::$anchor->get_href_by_number($elementNumber);

if ($hrefValue !== "") {
    echo "Href attribute of anchor number $elementNumber: $hrefValue\n\n";
} else {
    echo "Failed to get href attribute of anchor number $elementNumber\n\n";
}

// Example 2: Get href attribute of the second anchor element
$elementNumber = 1;

// Get the href attribute of the second anchor element
$hrefValue = DOM::$anchor->get_href_by_number($elementNumber);

if ($hrefValue !== "") {
    echo "Href attribute of anchor number $elementNumber: $hrefValue\n\n";
} else {
    echo "Failed to get href attribute of anchor number $elementNumber\n\n";
}

// Example 3: Get href attribute of anchor within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0;

// Get the href attribute of the first anchor element within the first frame
$hrefValue = DOM::$anchor->get_href_by_number($elementNumber, 0);

if ($hrefValue !== "") {
    echo "Href attribute of anchor number $elementNumber in frame 0: $hrefValue\n\n";
} else {
    echo "Anchor number $elementNumber not found in frame 0 or does not have an href attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();