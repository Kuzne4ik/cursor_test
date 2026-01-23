<?php
// Scenario: Get value of an input element by its number on the page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Get value of the first input element (number 0)
echo "Getting value of the first input element (number 0)...\n";
$value = DOM::$input->get_value_by_number(0);
if ($value !== "") {
    echo "Successfully got value of the first input element.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of the first input element or element has no value.\n";
}

// Example 2: Get value of the second input element (number 1)
echo "\nGetting value of the second input element (number 1)...\n";
$value = DOM::$input->get_value_by_number(1);
if ($value !== "") {
    echo "Successfully got value of the second input element.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of the second input element or element has no value.\n";
}

// Example 3: Get value of an input element within a frame (frame=0)
echo "\nGetting value of an input element within frame 0...\n";
$value = DOM::$input->get_value_by_number(0, "0");
if ($value !== "") {
    echo "Successfully got value of the input element within frame 0.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of the input element within frame 0 or element has no value.\n";
}

// Quit the application
WINDOW::$app->quit();
?>