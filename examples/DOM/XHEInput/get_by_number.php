<?php
// Scenario: Get an input element by its number on the page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Get the first input element on the page by its number
echo "Getting the first input element (number 0)...\n";
$inputElement = DOM::$input->get_by_number(0);
if ($inputElement->inner_number > -1) {
    echo "Successfully got the first input element.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
} else {
    echo "Failed to get the first input element.\n";
}

// Example 2: Get the second input element on the page by its number
echo "\nGetting the second input element (number 1)...\n";
$inputElement = DOM::$input->get_by_number(1);
if ($inputElement->inner_number > -1) {
    echo "Successfully got the second input element.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
} else {
    echo "Failed to get the second input element.\n";
}

// Example 3: Get an input element within a frame (frame=0)
echo "\nGetting an input element within frame 0...\n";
$inputElement = DOM::$input->get_by_number(0, "0");
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element within frame 0.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
} else {
    echo "Failed to get the input element within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>