<?php
// Scenario: Example of getting an element's value by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get value of element by its name attribute
$elementName = "username";

// Get the value of the input element with name="username"
$value = DOM::$input->get_value_by_name($elementName);

if ($value !== "") {
    echo "Value of element with name '$elementName': $value\n\n";
} else {
    echo "Failed to get value of element with name '$elementName'\n\n";
}

// Example 2: Get value of another element by its name attribute
$elementName = "info";

// Get the value of the input element with name="info"
$value = DOM::$input->get_value_by_name($elementName);

if ($value !== "") {
    echo "Value of element with name '$elementName': $value\n\n";
} else {
    echo "Failed to get value of element with name '$elementName'\n\n";
}

// Example 3: Get value of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementName = "username";

// Get the value of an input element within the first frame
$value = DOM::$input->get_value_by_name($elementName, 0);

if ($value !== "") {
    echo "Value of element with name '$elementName' in frame 0: $value\n\n";
} else {
    echo "Element with name '$elementName' not found in frame 0 or does not have a value attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();