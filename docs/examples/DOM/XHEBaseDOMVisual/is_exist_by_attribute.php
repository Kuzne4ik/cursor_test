<?php
// Scenario: Check if DOM element exists by attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchors that have various attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Check if anchor exists by exact attribute value
$attributeName = "data-action";
$attributeValue = "click";
$exists = DOM::$anchor->is_exist_by_attribute($attributeName, $attributeValue, true);

if ($exists) {
    echo "\nanchor with attribute '$attributeName'='$attributeValue' exists on the page";
} else {
    echo "\nanchor with attribute '$attributeName'='$attributeValue' does not exist on the page";
}

// Example 2: Check if anchor exists by partial attribute value
$attributeName = "data-action";
$partialAttributeValue = "click";
$exists = DOM::$anchor->is_exist_by_attribute($attributeName, $partialAttributeValue, false);

if ($exists) {
    echo "\nanchor with partial attribute '$attributeName'='$partialAttributeValue' exists on the page";
} else {
    echo "\nanchor with partial attribute '$attributeName'='$partialAttributeValue' does not exist on the page";
}

// Example 3: Check if anchor exists by attribute in frame (frame=0)
$frameNumber = 0;
$attributeName = "data-action";
$frameAttributeValue = "click";
$exists = DOM::$anchor->is_exist_by_attribute($attributeName, $frameAttributeValue, true,  $frameNumber);

if ($exists) {
    echo "\nanchor with attribute '$attributeName'='$frameAttributeValue' exists in frame $frameNumber";
} else {
    echo "\nanchor with attribute '$attributeName'='$frameAttributeValue' does not exist in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();