<?php
// Scenario: Set attribute of DOM elements by number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Set a new attribute to an element by number
$elementNumber = 0; // First element on the page
$attrName = "data-test";
$attrValue = "test-value-1";

// Set attribute to element by number
$setResult = DOM::$anchor->set_attribute_by_number($elementNumber, $attrName, $attrValue);
if ($setResult) {
    echo "Example 1: Successfully set attribute '{$attrName}' with value '{$attrValue}' to element with number {$elementNumber}\n";
} else {
    echo "Example 1: Failed to set attribute to element with number {$elementNumber}\n";
}

// Example 2: Update an existing attribute
$elementNumber2 = 1; // Second element on the page
$attrName2 = "class";
$attrValue2 = "updated-class";

// Update existing attribute
$updateResult = DOM::$anchor->set_attribute_by_number($elementNumber2, $attrName2, $attrValue2);
if ($updateResult) {
    echo "Example 2: Successfully updated attribute '{$attrName2}' with value '{$attrValue2}' for element with number {$elementNumber2}\n";
} else {
    echo "Example 2: Failed to update attribute for element with number {$elementNumber2}\n";
}

// Example 3: Set attribute to an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$elementNumber3 = 0; // First element in the frame
$attrName3 = "data-frame-test";
$attrValue3 = "frame-test-value";

// Set attribute to element within frame
$frameResult = DOM::$anchor->set_attribute_by_number($elementNumber3, $attrName3, $attrValue3, $frameNumber);
if ($frameResult) {
    echo "Example 3: Successfully set attribute '{$attrName3}' with value '{$attrValue3}' to element with number {$elementNumber3} in frame {$frameNumber}\n";
} else {
    echo "Example 3: Failed to set attribute to element with number {$elementNumber3} in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();