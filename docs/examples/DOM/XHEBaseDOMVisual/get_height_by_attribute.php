<?php
// Scenario: Example of getting the height of an element by its attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchors that have attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the height of an anchor by its attribute
$attrName = "id";
$attrValue = "id_mouseover1";

// Get the height of the anchor with id="id_mouseover1"
$height = DOM::$anchor->get_height_by_attribute($attrName, $attrValue, true);

if ($height !== -1) {
    echo "Height of anchor with $attrName='$attrValue': $height pixels\n\n";
} else {
    echo "Failed to get height of anchor with $attrName='$attrValue'\n\n";
}

// Example 2: Get the height of an anchor by partial attribute value
$attrName = "data-test";
$attrValue = "true";

// Get the height of the anchor with data-test containing "true"
$height = DOM::$anchor->get_height_by_attribute($attrName, $attrValue, false);

if ($height !== -1) {
    echo "Height of anchor with $attrName containing '$attrValue': $height pixels\n\n";
} else {
    echo "Failed to get height of anchor with $attrName containing '$attrValue'\n\n";
}


// Quit the application
WINDOW::$app->quit();