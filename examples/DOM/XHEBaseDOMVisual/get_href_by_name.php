<?php
// Scenario: Example of getting an element's href attribute by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get href attribute of anchor by its name attribute
$elementName = "mouseover1";

// Get the href attribute of the anchor element with name="mouseover1"
$hrefValue = DOM::$anchor->get_href_by_name($elementName);

if ($hrefValue !== "") {
    echo "Href attribute of anchor with name '$elementName': $hrefValue\n\n";
} else {
    echo "Failed to get href attribute of anchor with name '$elementName'\n\n";
}

// Example 2: Get href attribute of another anchor by its name attribute
$elementName = "onclick1";

// Get the href attribute of the anchor element with name="onclick1"
$hrefValue = DOM::$anchor->get_href_by_name($elementName);

if ($hrefValue !== "") {
    echo "Href attribute of anchor with name '$elementName': $hrefValue\n\n";
} else {
    echo "Failed to get href attribute of anchor with name '$elementName'\n\n";
}


// Example 3: Get href attribute of anchor within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementName = "f0_mouseover1";

// Get the href attribute of an anchor element within the first frame
$hrefValue = DOM::$anchor->get_href_by_name($elementName, 0);

if ($hrefValue !== "") {
    echo "Href attribute of anchor with name '$elementName' in frame 0: $hrefValue\n\n";
} else {
    echo "Anchor with name '$elementName' not found in frame 0 or does not have an href attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();