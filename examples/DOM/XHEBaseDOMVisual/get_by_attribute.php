<?php
// Scenario: This example demonstrates how to use the get_by_attribute function to find DOM elements by their attribute name and value.
// The function allows searching for elements by any attribute with exact or partial matching, and within specific frames.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements having attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Get element by exact attribute name and value match
echo "\n\nExample 1: Get element by exact attribute name and value match";
$attrName = "id";
$attrValue = "id_mouseover1";
$foundElement = DOM::$anchor->get_by_attribute($attrName, $attrValue, true);

// Check if element exists
if ($foundElement->is_exist()) {
    echo "\nElement with attribute '{$attrName}=\"{$attrValue}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $foundElement->get_tag();
    echo "\nElement ID: " . $foundElement->get_id();
    echo "\nElement class: " . $foundElement->get_attribute("class");
} else {
    echo "\nElement with attribute '{$attrName}=\"{$attrValue}' not found";
}

// Example 2: Get element by partial attribute value match
echo "\n\nExample 2: Get element by partial attribute value match";
$attrName = "data-action";
$partialValue = "click";
$foundElement = DOM::$anchor->get_by_attribute($attrName, $partialValue, false);

// Check if element exists
if ($foundElement->is_exist()) {
    echo "\nElement with partial attribute value '{$attrName}=\"{$partialValue}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $foundElement->get_tag();
    echo "\nFull attribute value: " . $foundElement->get_attribute($attrName);
    echo "\nElement inner text: " . $foundElement->get_inner_text();
} else {
    echo "\nElement with partial attribute value '{$attrName}=\"{$partialValue}' not found";
}

// Example 3: Get element by attribute within a specific frame (frame=0)
echo "\n\nExample 3: Get element by attribute within a specific frame (frame=0)";
$attrName = "name";
$frameAttrValue = "f0_mouseover1";
$foundElement = DOM::$anchor->get_by_attribute($attrName, $frameAttrValue, true, "0");

// Check if element exists
if ($foundElement->is_exist()) {
    echo "\nElement with attribute '{$attrName}=\"{$frameAttrValue}' found in frame 0";
    // Get and display element details
    echo "\nElement tag: " . $foundElement->get_tag();
    echo "\nElement inner number: " . $foundElement->inner_number;
    echo "\nElement inner text: " . $foundElement->get_inner_text();
} else {
    echo "\nElement with attribute '{$attrName}=\"{$frameAttrValue}' not found in frame 0";
}

// Quit the application
WINDOW::$app->quit();