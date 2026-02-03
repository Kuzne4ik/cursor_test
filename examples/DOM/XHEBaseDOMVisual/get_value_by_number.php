<?php
// Scenario: Example of getting an element's value by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get value of the first input element
$elementNumber = 0;

// Get the value of the first input element
$value = DOM::$input->get_value_by_number($elementNumber);

if ($value !== "") {
    echo "Value of element number $elementNumber: $value\n\n";
} else {
    echo "Failed to get value of element number $elementNumber\n\n";
}

// Example 2: Get value of the second input element
$elementNumber = 1;

// Get the value of the second input element
$value = DOM::$input->get_value_by_number($elementNumber);

if ($value !== "") {
    echo "Value of element number $elementNumber: $value\n\n";
} else {
    echo "Failed to get value of element number $elementNumber\n\n";
}

// Example 3: Get value of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0;

// Get the value of the first input element within the first frame
$value = DOM::$input->get_value_by_number($elementNumber, 0);

if ($value !== "") {
    echo "Value of element number $elementNumber in frame 0: $value\n\n";
} else {
    echo "Element number $elementNumber not found in frame 0 or does not have a value attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();