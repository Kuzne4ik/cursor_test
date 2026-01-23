<?php
// Scenario: Get value of an input element by its name attribute
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

// Example 1: Get value of an input element with name="username"
echo "Getting value of input element with name='username'...\n";
$value = DOM::$input->get_value_by_name("username");
if ($value !== "") {
    echo "Successfully got value of input element with name='username'.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with name='username' or element has no value.\n";
}

// Example 2: Get value of an input element with name="password"
echo "\nGetting value of input element with name='password'...\n";
$value = DOM::$input->get_value_by_name("password");
if ($value !== "") {
    echo "Successfully got value of input element with name='password'.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with name='password' or element has no value.\n";
}

// Example 3: Get value of an input element with name="email"
echo "\nGetting value of input element with name='email'...\n";
$value = DOM::$input->get_value_by_name("email");
if ($value !== "") {
    echo "Successfully got value of input element with name='email'.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with name='email' or element has no value.\n";
}

// Example 4: Get value of an input element within a frame (frame=0) with name="search"
echo "\nGetting value of input element with name='search' within frame 0...\n";
$value = DOM::$input->get_value_by_name("search", "0");
if ($value !== "") {
    echo "Successfully got value of input element with name='search' within frame 0.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with name='search' within frame 0 or element has no value.\n";
}

// Quit the application
WINDOW::$app->quit();
?>