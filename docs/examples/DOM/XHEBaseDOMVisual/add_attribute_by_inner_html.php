<?php
// Scenario: Add attribute to DOM elements by inner HTML
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor anchors
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Add a new attribute to an anchor by exact inner HTML
$innerHtml = "onmouseover 1";
$exactly = true;
$attrName = "data-test";
$attrValue = "test-value-1";

// Add attribute to anchor by exact inner HTML
$addResult = DOM::$anchor->add_attribute_by_inner_html($innerHtml, $exactly, $attrName, $attrValue);
if ($addResult) {
    echo "Successfully added attribute '{$attrName}' with value '{$attrValue}' to anchor with exact inner HTML '{$innerHtml}'\n";
} else {
    echo "Failed to add attribute to anchor with exact inner HTML '{$innerHtml}'\n";
}

// Example 2: Add a new attribute to an anchor by partial inner HTML
$partialInnerHtml = "onmouseover";
$exactly2 = false;
$attrName2 = "data-partial";
$attrValue2 = "partial-match-value";

// Add attribute to anchor by partial inner HTML
$partialResult = DOM::$anchor->add_attribute_by_inner_html($partialInnerHtml, $exactly2, $attrName2, $attrValue2);
if ($partialResult) {
    echo "Successfully added attribute '{$attrName2}' with value '{$attrValue2}' to anchor with partial inner HTML '{$partialInnerHtml}'\n";
} else {
    echo "Failed to add attribute to anchor with partial inner HTML '{$partialInnerHtml}'\n";
}

// Example 3: Add attribute to an anchor within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameInnerHtml = "Frame0: onmouseover 1";
$exactly3 = true;
$attrName3 = "data-frame-test";
$attrValue3 = "frame-test-value";

// Add attribute to anchor within frame
$frameResult = DOM::$anchor->add_attribute_by_inner_html($frameInnerHtml, $exactly3, $attrName3, $attrValue3, $frameNumber);
if ($frameResult) {
    echo "Successfully added attribute '{$attrName3}' with value '{$attrValue3}' to anchor with inner HTML '{$frameInnerHtml}' in frame {$frameNumber}\n";
} else {
    echo "Failed to add attribute to anchor with inner HTML '{$frameInnerHtml}' in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();