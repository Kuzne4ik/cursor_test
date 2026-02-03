<?php
// Scenario: Get an input element by its attribute
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

// Example 1: Get an input element with id="search_input"
echo "Getting input element with id='search_input'...\n";
$inputElement = DOM::$input->get_by_attribute("id", "search_input", true);
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element with id='search_input'.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
    echo "Element placeholder: " . $inputElement->get_attribute("placeholder") . "\n";
} else {
    echo "Failed to get the input element with id='search_input'.\n";
}

// Example 2: Get an input element with class="form-control"
echo "\nGetting input element with class='form-control'...\n";
$inputElement = DOM::$input->get_by_attribute("class", "form-control", true);
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element with class='form-control'.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
} else {
    echo "Failed to get the input element with class='form-control'.\n";
}

// Example 3: Get an input element with placeholder="Enter your email"
echo "\nGetting input element with placeholder='Enter your email'...\n";
$inputElement = DOM::$input->get_by_attribute("placeholder", "Enter your email", true);
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element with placeholder='Enter your email'.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
} else {
    echo "Failed to get the input element with placeholder='Enter your email'.\n";
}

// Example 4: Get an input element within a frame (frame=0) with type="text"
echo "\nGetting input element with type='text' within frame 0...\n";
$inputElement = DOM::$input->get_by_attribute("type", "text", true, "0");
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element with type='text' within frame 0.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
} else {
    echo "Failed to get the input element with type='text' within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>