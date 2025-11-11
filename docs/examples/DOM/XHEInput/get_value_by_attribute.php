<?php
// Scenario: Get value of an input element by its attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Get value of an input element with id="username_input"
echo "Getting value of input element with id='username_input'...\n";
$value = DOM::$input->get_value_by_attribute("id", "username_input", true);
if ($value !== "") {
    echo "Successfully got value of input element with id='username_input'.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with id='username_input' or element has no value.\n";
}

// Example 2: Get value of an input element with class="email-input"
echo "\nGetting value of input element with class='email-input'...\n";
$value = DOM::$input->get_value_by_attribute("class", "email-input", true);
if ($value !== "") {
    echo "Successfully got value of input element with class='email-input'.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with class='email-input' or element has no value.\n";
}

// Example 3: Get value of an input element with placeholder="Enter your password"
echo "\nGetting value of input element with placeholder='Enter your password'...\n";
$value = DOM::$input->get_value_by_attribute("placeholder", "Enter your password", true);
if ($value !== "") {
    echo "Successfully got value of input element with placeholder='Enter your password'.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with placeholder='Enter your password' or element has no value.\n";
}

// Example 4: Get value of an input element within a frame (frame=0) with type="search"
echo "\nGetting value of input element with type='search' within frame 0...\n";
$value = DOM::$input->get_value_by_attribute("type", "search", true, "0");
if ($value !== "") {
    echo "Successfully got value of input element with type='search' within frame 0.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with type='search' within frame 0 or element has no value.\n";
}

// Quit the application
WINDOW::$app->quit();
?>