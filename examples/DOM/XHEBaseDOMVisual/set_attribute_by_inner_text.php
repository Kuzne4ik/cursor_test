<?php
// Scenario: Set attribute of DOM elements by inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Set a new attribute to an element by exact inner text
$innerText = "`id_mouseover1`";
$exactly = true;
$attrName = "data-test";
$attrValue = "test-value-1";

// Set attribute to element by exact inner text
$setResult = DOM::$anchor->set_attribute_by_inner_text($innerText, $exactly, $attrName, $attrValue);
if ($setResult) {
    echo "Example 1: Successfully set attribute '{$attrName}' with value '{$attrValue}' to element with exact inner text '{$innerText}'\n";
} else {
    echo "Example 1: Failed to set attribute to element with exact inner text '{$innerText}'\n";
}

// Example 2: Set a new attribute to an element by partial inner text
$partialInnerText = "Прикольная прога";
$exactly2 = false;
$attrName2 = "data-partial";
$attrValue2 = "partial-match-value";

// Set attribute to element by partial inner text
$partialResult = DOM::$anchor->set_attribute_by_inner_text($partialInnerText, $exactly2, $attrName2, $attrValue2);
if ($partialResult) {
    echo "Example 2: Successfully set attribute '{$attrName2}' with value '{$attrValue2}' to element with partial inner text '{$partialInnerText}'\n";
} else {
    echo "Example 2: Failed to set attribute to element with partial inner text '{$partialInnerText}'\n";
}

// Example 3: Set attribute to an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameInnerText = "Frame0: onmouseover 1";
$exactly3 = true;
$attrName3 = "data-frame-test";
$attrValue3 = "frame-test-value";

// Set attribute to element within frame
$frameResult = DOM::$anchor->set_attribute_by_inner_text($frameInnerText, $exactly3, $attrName3, $attrValue3, $frameNumber);
if ($frameResult) {
    echo "Example 3: Successfully set attribute '{$attrName3}' with value '{$attrValue3}' to element with inner text '{$frameInnerText}' in frame {$frameNumber}\n";
} else {
    echo "Example 3: Failed to set attribute to element with inner text '{$frameInnerText}' in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();