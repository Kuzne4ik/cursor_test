<?php
// Scenario: Set attribute of DOM elements by attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Set a new attribute to an element by exact attribute match
$attrName = "id";
$attrValue = "id_mouseover1";
$exactly = true;
$newAttrName = "data-test";
$newAttrValue = "test-value-1";

// Set attribute to element by exact attribute match
$setResult = DOM::$anchor->set_attribute_by_attribute($attrName, $attrValue, $exactly, $newAttrName, $newAttrValue);
if ($setResult) {
    echo "Example 1: Successfully set attribute '{$newAttrName}' with value '{$newAttrValue}' to element with exact attribute '{$attrName}'='{$attrValue}'\n";
} else {
    echo "Example 1: Failed to set attribute to element with exact attribute '{$attrName}'='{$attrValue}'\n";
}

// Example 2: Set a new attribute to an element by partial attribute match
$partialAttrName = "class";
$partialAttrValue = "link";
$exactly2 = false;
$newAttrName2 = "data-partial";
$newAttrValue2 = "partial-match-value";

// Set attribute to element by partial attribute match
$partialResult = DOM::$anchor->set_attribute_by_attribute($partialAttrName, $partialAttrValue, $exactly2, $newAttrName2, $newAttrValue2);
if ($partialResult) {
    echo "Example 2: Successfully set attribute '{$newAttrName2}' with value '{$newAttrValue2}' to element with partial attribute '{$partialAttrName}'='{$partialAttrValue}'\n";
} else {
    echo "Example 2: Failed to set attribute to element with partial attribute '{$partialAttrName}'='{$partialAttrValue}'\n";
}

// Example 3: Set attribute to an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameAttrName = "id";
$frameAttrValue = "id_f0_mouseover1";
$exactly3 = true;
$newAttrName3 = "data-frame-test";
$newAttrValue3 = "frame-test-value";

// Set attribute to element within frame
$frameResult = DOM::$anchor->set_attribute_by_attribute($frameAttrName, $frameAttrValue, $exactly3, $newAttrName3, $newAttrValue3, $frameNumber);
if ($frameResult) {
    echo "Example 3: Successfully set attribute '{$newAttrName3}' with value '{$newAttrValue3}' to element with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
} else {
    echo "Example 3: Failed to set attribute to element with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();