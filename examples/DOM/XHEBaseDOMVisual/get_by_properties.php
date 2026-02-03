<?php
// Scenario: This example demonstrates how to use the get_by_properties function to find DOM elements by a set of properties.
// The function allows searching for elements by multiple properties simultaneously, and within specific frames.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements having different properties
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");
WEB::$browser->wait_for();

// Example 1: Get element by tag name and id
echo "\n\nExample 1: Get element by type name and name";
$properties = [
    "type" => "text",
    "name" => "username"
];
$propertiesJson = json_encode($properties);
$foundElement = DOM::$input->get_by_properties($propertiesJson);

// Check if element exists
if ($foundElement->is_exist()) {
    echo "\nElement with properties " . json_encode($properties) . " found successfully";
    // Get and display element details
    echo "\nElement tag: " . $foundElement->get_tag();
    echo "\nElement ID: " . $foundElement->get_id();
    echo "\nElement type: " . $foundElement->get_attribute("type");
    echo "\nElement name: " . $foundElement->get_name();
} else {
    echo "\nElement with properties " . json_encode($properties) . " not found";
}

// Example 2: Get element by tag name, class and type
echo "\n\nExample 2: Get element by width and type";
$properties = [
    "width" => "10",
    "type" => "password"
];
$propertiesJson = json_encode($properties);
$foundElement = DOM::$input->get_by_properties($propertiesJson);

// Check if element exists
if ($foundElement->is_exist()) {
    echo "\nElement with properties " . json_encode($properties) . " found successfully";
    // Get and display element details
    echo "\nElement tag: " . $foundElement->get_tag();
    echo "\nElement type: " . $foundElement->get_attribute("type");
    echo "\nElement name: " . $foundElement->get_name();
} else {
    echo "\nElement with properties " . json_encode($properties) . " not found";
}

// Quit the application
WINDOW::$app->quit();