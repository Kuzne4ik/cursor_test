<?php
// Scenario: Example of getting an element's attribute value by another attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get an attribute by another attribute
$attrName = "id";
$attrValue = "id_mouseover1";
$attrValueExactly = true;
$targetAttrName = "href";

// Get the href attribute of the first element with id="id_mouseover1"
$attributeValue = DOM::$anchor->get_attribute_by_attribute($attrName, $attrValue, $attrValueExactly, $targetAttrName);

if ($attributeValue !== "") {
    echo "Attribute '$targetAttrName' value for element with $attrName='$attrValue': $attributeValue\n\n";
} else {
    echo "Failed to get attribute '$targetAttrName' for element with $attrName='$attrValue'\n\n";
}

// Example 2: Get attribute with partial attribute value matching
$attrName = "name";
$attrValue = "mouseover"; // This will match elements with name containing "mouseover"
$attrValueExactly = false;
$targetAttrName = "href";

// Get the href attribute using partial attribute value matching
// Note: This will match elements with name="mouseover1", name="mouseover2", etc.
$attributeValue = DOM::$anchor->get_attribute_by_attribute($attrName, $attrValue, $attrValueExactly, $targetAttrName);

if ($attributeValue !== "") {
    echo "Attribute '$targetAttrName' value for element with partial $attrName='$attrValue': $attributeValue\n\n";
} else {
    echo "Note: No element found with $attrName containing '$attrValue' or attribute '$targetAttrName' does not exist\n";
    echo "Let's check what elements actually exist:\n";
    
    // Check elements with name="mouseover1" (exact match)
    $element1 = DOM::$anchor->get_by_attribute($attrName, "mouseover1", true);
    if ($element1->is_exist()) {
        $href1 = $element1->get_attribute($targetAttrName);
        echo "  - Element with name='mouseover1' has href='$href1'\n";
    }
    
    // Check elements with name="mouseover2" (exact match)
    $element2 = DOM::$anchor->get_by_attribute($attrName, "mouseover2", true);
    if ($element2->is_exist()) {
        $href2 = $element2->get_attribute($targetAttrName);
        echo "  - Element with name='mouseover2' has href='$href2'\n";
    }
    
    // Try with exact match on "mouseover1" to demonstrate the method works
    echo "\nTrying with exact match on 'mouseover1':\n";
    $exactValue = DOM::$anchor->get_attribute_by_attribute($attrName, "mouseover1", true, $targetAttrName);
    if ($exactValue !== "") {
        echo "  Success! Attribute '$targetAttrName' value for element with name='mouseover1': $exactValue\n";
    }
    echo "\n";
}

// Example 3: Get attribute by attribute within a specific frame
// This example assumes there is a frame with index 0 on the page
$attrName = "id";
$attrValue = "id_mouseover1"; // Using an element that exists on the main page for frame example
$attrValueExactly = false;
$targetAttrName = "href";
$frameNumber = 0;

// Get the href attribute of an element within the first frame
$attributeValue = DOM::$anchor->get_attribute_by_attribute($attrName, $attrValue, $attrValueExactly, $targetAttrName,  $frameNumber);

if ($attributeValue !== "") {
    echo "Attribute '$targetAttrName' value for element with $attrName='$attrValue' in frame frameNumber: $attributeValue\n\n";
} else {
    echo "Element with $attrName='$attrValue' not found in frame frameNumber or attribute '$targetAttrName' does not exist\n";
}

// Quit the application
WINDOW::$app->quit();