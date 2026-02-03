<?php
// Scenario: Example of getting an element's href attribute by its inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get href attribute by exact inner text
$innerText = "`id_mouseover1`";

// Get the href attribute of the anchor element with exact inner text "`id_mouseover1`"
$hrefValue = DOM::$anchor->get_href_by_inner_text($innerText, true);

if ($hrefValue !== "") {
    echo "Href attribute of anchor with inner text '$innerText': $hrefValue\n\n";
} else {
    echo "Failed to get href attribute of anchor with inner text '$innerText'\n\n";
}

// Example 2: Get href attribute with partial inner text matching
$partialInnerText = "Navigate to"; // Partial match for anchors with "Navigate to"

// Get the href attribute using partial inner text matching
$hrefValue = DOM::$anchor->get_href_by_inner_text($partialInnerText, false);

if ($hrefValue !== "") {
    echo "Href attribute of anchor with partial inner text '$partialInnerText': $hrefValue\n\n";
} else {
    echo "Failed to get href attribute of anchor with partial inner text '$partialInnerText'\n\n";
}

// Example 3: Get href attribute by inner text within a specific frame
// This example assumes there is a frame with index 0 on the page
$frameInnerText = "Frame0: onmouseover 1";

// Get the href attribute of an anchor within the first frame
$hrefValue = DOM::$anchor->get_href_by_inner_text($frameInnerText, true, 0);

if ($hrefValue !== "") {
    echo "Href attribute of anchor with inner text '$frameInnerText' in frame 0: $hrefValue\n\n";
} else {
    echo "Anchor with inner text '$frameInnerText' not found in frame 0 or does not have an href attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();