<?php
// Scenario: Example of getting the width of an element by its attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the width of an element by its attribute
$attrName = "id";
$attrValue = "id_mouseover1";

// Get the width of the element with id="id_mouseover1"
$width = DOM::$anchor->get_width_by_attribute($attrName, $attrValue, true);

if ($width !== -1) {
    echo "Width of element with $attrName='$attrValue': $width pixels\n\n";
} else {
    echo "Failed to get width of element with $attrName='$attrValue'\n\n";
}

// Example 2: Get the width of an element by partial attribute value
$attrName = "name";
$attrValue = "mouseover";

// Get the width of the element with name containing "mouseover"
$width = DOM::$anchor->get_width_by_attribute($attrName, $attrValue, false);

if ($width !== -1) {
    echo "Width of element with $attrName containing '$attrValue': $width pixels\n\n";
} else {
    echo "Failed to get width of element with $attrName containing '$attrValue'\n\n";
}

// Example 3: Get the width of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$attrName = "id";
$attrValue = "id_f0_mouseover1";

// Get the width of the element with id="id_f0_mouseover1" within the first frame
$width = DOM::$anchor->get_width_by_attribute($attrName, $attrValue, true, 0);

if ($width !== -1) {
    echo "Width of element with $attrName='$attrValue' in frame 0: $width pixels\n\n";
} else {
    echo "Element with $attrName='$attrValue' not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();