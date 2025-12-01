<?php
// Scenario: Set attribute of DOM elements by inner HTML
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Set a new attribute to an element by exact inner HTML
$innerHtml = "Блог";
$exactly = true;
$attrName = "data-test";
$attrValue = "test-value-1";

// Set attribute to element by exact inner HTML
$setResult = DOM::$anchor->set_attribute_by_inner_html($innerHtml, $exactly, $attrName, $attrValue);
if ($setResult) {
    echo "Example 1: Successfully set attribute '{$attrName}' with value '{$attrValue}' to element with exact inner HTML '{$innerHtml}'\n";
} else {
    echo "Example 1: Failed to set attribute to element with exact inner HTML '{$innerHtml}'\n";
}

// Example 2: Set a new attribute to an element by partial inner HTML
$partialInnerHtml = "onclick";
$exactly2 = false;
$attrName2 = "data-partial";
$attrValue2 = "partial-match-value";

// Set attribute to element by partial inner HTML
$partialResult = DOM::$anchor->set_attribute_by_inner_html($partialInnerHtml, $exactly2, $attrName2, $attrValue2);
if ($partialResult) {
    echo "Example 2: Successfully set attribute '{$attrName2}' with value '{$attrValue2}' to element with partial inner HTML '{$partialInnerHtml}'\n";
} else {
    echo "Example 2: Failed to set attribute to element with partial inner HTML '{$partialInnerHtml}'\n";
}

// Example 3: Set attribute to an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameInnerHtml = "Frame0: onmouseover 1";
$exactly3 = true;
$attrName3 = "data-frame-test";
$attrValue3 = "frame-test-value";

// Set attribute to element within frame
$frameResult = DOM::$anchor->set_attribute_by_inner_html($frameInnerHtml, $exactly3, $attrName3, $attrValue3, $frameNumber);
if ($frameResult) {
    echo "Example 3: Successfully set attribute '{$attrName3}' with value '{$attrValue3}' to element with inner HTML '{$frameInnerHtml}' in frame {$frameNumber}\n";
} else {
    echo "Example 3: Failed to set attribute to element with inner HTML '{$frameInnerHtml}' in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();