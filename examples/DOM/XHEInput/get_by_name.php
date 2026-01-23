<?php
// Scenario: Get an input element by its name attribute
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

// Example 1: Get an input element with name="username"
echo "Getting input element with name='username'...\n";
$inputElement = DOM::$input->get_by_name("username");
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element with name='username'.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
} else {
    echo "Failed to get the input element with name='username'.\n";
}

// Example 2: Get an input element with name="password"
echo "\nGetting input element with name='password'...\n";
$inputElement = DOM::$input->get_by_name("password");
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element with name='password'.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
} else {
    echo "Failed to get the input element with name='password'.\n";
}

// Example 3: Get an input element within a frame (frame=0) with name="search"
echo "\nGetting input element with name='search' within frame 0...\n";
$inputElement = DOM::$input->get_by_name("search", "0");
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element with name='search' within frame 0.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
} else {
    echo "Failed to get the input element with name='search' within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>