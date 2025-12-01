<?php
// Scenario: Set attribute of DOM elements by name
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Set a new attribute to an input element by name
$elementName = "id0";
$attrName = "data-test";
$attrValue = "test-value-1";

// Set attribute to input element by name
$setResult = DOM::$input->set_attribute_by_name($elementName, $attrName, $attrValue);
if ($setResult) {
    echo "Example 1: Successfully set attribute '{$attrName}' with value '{$attrValue}' to element with name '{$elementName}'\n";
} else {
    echo "Example 1: Failed to set attribute to element with name '{$elementName}'\n";
}

// Example 2: Update an existing attribute of input element
$elementName2 = "id1";
$attrName2 = "class";
$attrValue2 = "updated-class";

// Update existing attribute of input element
$updateResult = DOM::$input->set_attribute_by_name($elementName2, $attrName2, $attrValue2);
if ($updateResult) {
    echo "Example 2: Successfully updated attribute '{$attrName2}' with value '{$attrValue2}' for element with name '{$elementName2}'\n";
} else {
    echo "Example 2: Failed to update attribute for element with name '{$elementName2}'\n";
}

// Example 3: Set attribute to an input element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$elementName3 = "fr_id0";
$attrName3 = "data-frame-test";
$attrValue3 = "frame-test-value";

// Set attribute to input element within frame
$frameResult = DOM::$input->set_attribute_by_name($elementName3, $attrName3, $attrValue3, $frameNumber);
if ($frameResult) {
    echo "Example 3: Successfully set attribute '{$attrName3}' with value '{$attrValue3}' to element with name '{$elementName3}' in frame {$frameNumber}\n";
} else {
    echo "Example 3: Failed to set attribute to element with name '{$elementName3}' in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();