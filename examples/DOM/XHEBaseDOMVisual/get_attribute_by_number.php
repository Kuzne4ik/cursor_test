<?php
// Scenario: Get the value of a specific attribute of an element by its number on the page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having various attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get attribute value of element by its number
$elementNumber = 0;  // First element on the page
$attributeName = "id";
$attributeValue = DOM::$anchor->get_attribute_by_number($elementNumber, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for anchor element at position $elementNumber: $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for anchor element at position $elementNumber or element doesn't exist";
}

// Example 2: Get another attribute value of the same element
$elementNumber = 0;  // First element on the page
$attributeName = "name";
$attributeValue = DOM::$anchor->get_attribute_by_number($elementNumber, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for anchor element at position $elementNumber: $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for anchor element at position $elementNumber or element doesn't exist";
}

// Example 3: Get attribute value of another element by its number
$elementNumber = 1;  // Second element on the page
$attributeName = "name";
$attributeValue = DOM::$form->get_attribute_by_number($elementNumber, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for form element at position $elementNumber: $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for form element at position $elementNumber or element doesn't exist";
}

// Example 4: Get attribute value of element by its number within a specific frame
// First check if frames are available
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Get attribute value of element in the first frame (frame=0)
    $elementNumber = 0;  // First element in the frame
    $attributeName = "id";
    $attributeValue = DOM::$anchor->get_attribute_by_number($elementNumber, $attributeName, 0);
    
    if ($attributeValue !== "") {
        echo "\n\nValue of attribute '$attributeName' for anchor element at position $elementNumber in frame 0: $attributeValue";
    } else {
        echo "\n\nAttribute '$attributeName' not found for anchor element at position $elementNumber in frame 0 or element doesn't exist";
    }
} else {
    echo "\n\nNo frames found on the page";
}

// Quit the application
WINDOW::$app->quit();