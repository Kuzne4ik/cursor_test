<?php
// Scenario: Get's value of a specific attribute of an element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having src attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Get attribute value of element by its src (exact match)
$elementSrc = "./screenshots/01.jpg";
$attributeName = "alt";
$attributeValue = DOM::$image->get_attribute_by_src($elementSrc, true, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for image element with src '$elementSrc': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for image element with src '$elementSrc' or element doesn't exist";
}

// Example 2: Get another attribute value of same element
$elementSrc = "./screenshots/01.jpg";
$attributeName = "id";
$attributeValue = DOM::$image->get_attribute_by_src($elementSrc,  true, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for image element with src '$elementSrc': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for image element with src '$elementSrc' or element doesn't exist";
}

// Example 3: Get attribute value of element by its src (partial match)
$elementSrc = "captcha.jpg";  // Partial match
$attributeName = "alt";
$attributeValue = DOM::$image->get_attribute_by_src($elementSrc,  false, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for image element with src containing '$elementSrc': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for image element with src containing '$elementSrc' or element doesn't exist";
}

// Example 4: Get attribute value of element by its src within a specific frame
// First check if frames are available
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Get attribute value of element in the first frame (frame=0)
    $elementSrc = "./screenshots/01.jpg"; // Same image exists in frame
    $attributeName = "id";
    $attributeValue = DOM::$image->get_attribute_by_src($elementSrc, true, $attributeName, 0);
    
    if ($attributeValue !== "") {
        echo "\n\nValue of attribute '$attributeName' for image element with src '$elementSrc' in frame 0: $attributeValue";
    } else {
        echo "\n\nAttribute '$attributeName' not found for image element with src '$elementSrc' in frame 0 or element doesn't exist";
    }
} else {
    echo "\n\nNo frames found on the page";
}

// Quit the application
WINDOW::$app->quit();