<?php
// Scenario: Example of getting an element by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get an element by its name attribute
$elementName = "username"; // Name of an input element in the form

// Get the element by its name attribute
$foundElement = DOM::$input->get_by_name($elementName);

// Check if the element exists
if ($foundElement->is_exist()) {
    echo "Element with name '$elementName' exists.\n";
    
    // Get element information
    $value = $foundElement->get_value();
    $tag = $foundElement->get_tag();
    
    echo "Tag name: $tag\n";
    echo "Value: '$value'\n";
    
} else {
    echo "Element with name '$elementName' does not exist.\n";
}
echo "\n";

// Example 2: Get an element by name within a frame
// This example gets an element from frame 0 (first iframe on the page)
$frameElementName = "username"; // Name of an input element in the frame

// Get the element by its name attribute within the frame
$foundFrameElement = DOM::$input->get_by_name($frameElementName, "0");

// Check if the element exists
if ($foundFrameElement->is_exist()) {
    echo "Element with name '$frameElementName' in frame 0 exists.\n";
    
    // Get element information
    $value = $foundFrameElement->get_value();
    $tag = $foundFrameElement->get_tag();
    
    echo "Tag name: $tag\n";
    echo "Value: '$value'\n";
} else {
    echo "Element with name '$frameElementName' in frame 0 does not exist.\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();