<?php
// Scenario: Example of getting an element's value by its attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements that have values
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get value of element by its attribute
$attrName = "id";
$attrValue = "form1_username";

// Get the value of the input element with id="form1_username"
$value = DOM::$input->get_value_by_attribute($attrName, $attrValue, true);

if ($value !== "") {
    echo "Value of element with $attrName='$attrValue': $value\n\n";
} else {
    echo "Failed to get value of element with $attrName='$attrValue'\n\n";
}

// Example 2: Get value with partial attribute value matching
$attrName = "name";
$attrValue = "user";

// Get the value using partial attribute value matching
$value = DOM::$input->get_value_by_attribute($attrName, $attrValue, false);

if ($value !== "") {
    echo "Value of element with partial $attrName='$attrValue': $value\n\n";
} else {
    echo "Failed to get value of element with partial $attrName='$attrValue'\n\n";
}

// Example 3: Get value of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$attrName = "id";
$attrValue = "form1_username";

// Get the value of an input element within the first frame
$value = DOM::$input->get_value_by_attribute($attrName, $attrValue, true, 0);

if ($value !== "") {
    echo "Value of element with $attrName='$attrValue' in frame 0: $value\n\n";
} else {
    echo "Element with $attrName='$attrValue' not found in frame 0 or does not have a value attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();