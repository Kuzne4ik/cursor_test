<?php
// Scenario: Get the number of an element on the page by its attribute value
// XHE host and initialization
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having various attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Get element number by attribute (exact match)
$attrName = "name";
$attrValue = "username";
$number = DOM::$input->get_number_by_attribute($attrName, $attrValue, true);

if ($number >= 0) {
    echo "\n\nElement with attribute '$attrName' = '$attrValue' found at position: $number";
} else {
    echo "\n\nElement with attribute '$attrName' = '$attrValue' not found";
}

// Example 2: Get element number by attribute (partial match)
$attrName = "name";
$attrValue = "sex";  // Partial match
$number = DOM::$radiobox->get_number_by_attribute($attrName, $attrValue, false);

if ($number >= 0) {
    echo "\n\nElement with attribute '$attrName' containing '$attrValue' found at position: $number";
} else {
    echo "\n\nElement with attribute '$attrName' containing '$attrValue' not found";
}

// Example 3: Get element number by attribute within a specific frame
// First check if frames are available
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Get element number by attribute in the first frame (frame=0)
    $attrName = "name";
    $attrValue = "username";
    $number = DOM::$input->get_number_by_attribute($attrName, $attrValue, true, 0);
    
    if ($number >= 0) {
        echo "\n\nElement with attribute '$attrName' = '$attrValue' found in frame 0 at position: $number";
    } else {
        echo "\n\nElement with attribute '$attrName' = '$attrValue' not found in frame 0";
    }
} else {
    echo "\n\nNo frames found on the page";
}

// Quit the application
WINDOW::$app->quit();