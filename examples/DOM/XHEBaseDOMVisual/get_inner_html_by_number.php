<?php
// Scenario: Example of getting an element's inner HTML by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements containing HTML content
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get inner HTML of element by its number
$elementNumber = 0;

// Get the inner HTML of the first anchor element (index 0)
$innerHtml = DOM::$anchor->get_inner_html_by_number($elementNumber);

if ($innerHtml !== "") {
    echo "\n\nInner HTML of element #$elementNumber: $innerHtml\n\n";
} else {
    echo "\n\nFailed to get inner HTML of element #$elementNumber\n\n";
}

// Example 2: Get inner HTML of another element by its number
$elementNumber = 1;

// Get the inner HTML of the second anchor element (index 1)
$innerHtml = DOM::$anchor->get_inner_html_by_number($elementNumber);

if ($innerHtml !== "") {
    echo "Inner HTML of element #$elementNumber: $innerHtml\n\n";
} else {
    echo "Failed to get inner HTML of element #$elementNumber\n\n";
}

// Example 3: Get inner HTML of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0;

// Get the inner HTML of an element within the first frame
$innerHtml = DOM::$anchor->get_inner_html_by_number($elementNumber, 0);

if ($innerHtml !== "") {
    echo "Inner HTML of element #$elementNumber in frame 0: $innerHtml\n\n";
} else {
    echo "Element #$elementNumber not found in frame 0 or does not have inner HTML\n\n";
}

// Quit the application
WINDOW::$app->quit();