<?php
// Scenario: Get the value of a specific attribute of an element by its name attribute
// XHE host and initialization
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements having name attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Get attribute value of element by its name
$elementName = "username";
$attributeName = "id";
$attributeValue = DOM::$input->get_attribute_by_name($elementName, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for element with name '$elementName': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for element with name '$elementName' or element doesn't exist";
}

// Example 2: Get another attribute value of the same element
$elementName = "username";
$attributeName = "class";
$attributeValue = DOM::$input->get_attribute_by_name($elementName, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for element with name '$elementName': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for element with name '$elementName' or element doesn't exist";
}

// Example 3: Get attribute value of another element by its name
$elementName = "passwd"; // Correct name attribute value from form.html
$attributeName = "type";
$attributeValue = DOM::$input->get_attribute_by_name($elementName, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for element with name '$elementName': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for element with name '$elementName' or element doesn't exist";
}

// Example 4: Get attribute value of element by its name within a specific frame
// First check if frames are available
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Get attribute value of element in the first frame (frame=0)
    $elementName = "username"; // Element name that exists in frame
    $attributeName = "id";
    $attributeValue = DOM::$input->get_attribute_by_name($elementName, $attributeName, 0);
    
    if ($attributeValue !== "") {
        echo "\n\nValue of attribute '$attributeName' for element with name '$elementName' in frame 0: $attributeValue";
    } else {
        echo "\n\nAttribute '$attributeName' not found for element with name '$elementName' in frame 0 or element doesn't exist";
    }
} else {
    echo "\n\nNo frames found on the page";
}

// Quit the application
WINDOW::$app->quit();