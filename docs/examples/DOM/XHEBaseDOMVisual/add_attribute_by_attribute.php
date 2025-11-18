<?php
// Scenario: Add attribute to DOM elements by attribute
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Add a new attribute to an anchor by exact attribute match
$attrName = "id";
$attrValue = "id_mouseover1";
$exactly = true;
$newAttrName = "data-test";
$newAttrValue = "test-value-1";

// Add attribute to anchor by exact attribute match
$addResult = DOM::$anchor->add_attribute_by_attribute($attrName, $attrValue, $exactly, $newAttrName, $newAttrValue);
if ($addResult) {
    echo "Successfully added attribute '{$newAttrName}' with value '{$newAttrValue}' to anchor with exact attribute '{$attrName}'='{$attrValue}'\n";
} else {
    echo "Failed to add attribute to anchor with exact attribute '{$attrName}'='{$attrValue}'\n";
}

// Example 2: Add a new attribute to an anchor by partial attribute match
$attrName = "class";
$attrValue = "link";
$exactly2 = false;
$newAttrName2 = "data-partial";
$newAttrValue2 = "partial-match-value";

// Add attribute to anchor by partial attribute match
$partialResult = DOM::$anchor->add_attribute_by_attribute($attrName, $attrValue, $exactly2, $newAttrName2, $newAttrValue2);
if ($partialResult) {
    echo "Successfully added attribute '{$newAttrName2}' with value '{$newAttrValue2}' to anchor with partial attribute '{$attrName}'='{$attrValue}'\n";
} else {
    echo "Failed to add attribute to anchor with partial attribute '{$attrName}'='{$attrValue}'\n";
}

// Example 3: Add attribute to an anchor within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameAttrName = "id";
$frameAttrValue = "mouseover";
$exactly3 = false;
$newAttrName3 = "data-frame-test";
$newAttrValue3 = "frame-test-value";

// Add attribute to anchor within frame
$frameResult = DOM::$anchor->add_attribute_by_attribute($frameAttrName, $frameAttrValue, $exactly3, $newAttrName3, $newAttrValue3, $frameNumber);
if ($frameResult) {
    echo "Successfully added attribute '{$newAttrName3}' with value '{$newAttrValue3}' to anchor with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
} else {
    echo "Failed to add attribute to anchor with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();