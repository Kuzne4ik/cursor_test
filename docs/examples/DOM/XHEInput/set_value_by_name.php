<?php
// Scenario: Set value of an input element by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Set value of an input element with name="username"
echo "Setting value of input element with name='username'...\n";
$result = DOM::$input->set_value_by_name("username", "John Doe");
if ($result) {
    echo "Successfully set value of input element with name='username'.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_name("username");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with name='username'.\n";
}

// Example 2: Set value of an input element with name="password"
echo "\nSetting value of input element with name='password'...\n";
$result = DOM::$input->set_value_by_name("password", "mypassword123");
if ($result) {
    echo "Successfully set value of input element with name='password'.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_name("password");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with name='password'.\n";
}

// Example 3: Set value of an input element with name="email"
echo "\nSetting value of input element with name='email'...\n";
$result = DOM::$input->set_value_by_name("email", "user@example.com");
if ($result) {
    echo "Successfully set value of input element with name='email'.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_name("email");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with name='email'.\n";
}

// Example 4: Set value of an input element within a frame (frame=0) with name="search"
echo "\nSetting value of input element with name='search' within frame 0...\n";
$result = DOM::$input->set_value_by_name("search", "search query", "0");
if ($result) {
    echo "Successfully set value of input element with name='search' within frame 0.\n";
    // Verify value was set
    $value = DOM::$input->get_value_by_name("search", "0");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with name='search' within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>