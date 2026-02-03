<?php
// Scenario: Example of getting the count of elements by attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various inputs
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get the count of inputs by attribute
$attrName = "type";
$attrValue = "text";

// Get the count of inputs with type="text"
$count = DOM::$input->get_count_by_attribute($attrName, $attrValue, true);
echo "Number of inputs with attribute $attrName='$attrValue': $count\n\n";

// Example 2: Get the count of inputs by another attribute
$attrName = "name";
$attrValue = "username";

// Get the count of inputs with name="username"
$count = DOM::$input->get_count_by_attribute($attrName, $attrValue, true);
echo "Number of inputs with attribute $attrName='$attrValue': $count\n\n";


// Quit the application
WINDOW::$app->quit();