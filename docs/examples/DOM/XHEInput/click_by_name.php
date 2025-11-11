<?php
// Scenario: Click on an input element by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Click on an input element with name="username"
echo "Clicking on input element with name='username'...\n";
$result = DOM::$input->click_by_name("username");
if ($result) {
    echo "Successfully clicked on input element with name='username'.\n";
} else {
    echo "Failed to click on input element with name='username'.\n";
}

// Example 2: Click on an input element with name="password"
echo "\nClicking on input element with name='password'...\n";
$result = DOM::$input->click_by_name("password");
if ($result) {
    echo "Successfully clicked on input element with name='password'.\n";
} else {
    echo "Failed to click on input element with name='password'.\n";
}

// Example 3: Click on an input element within a frame (frame=0)
echo "\nClicking on an input element with name='search' within frame 0...\n";
$result = DOM::$input->click_by_name("search", "0");
if ($result) {
    echo "Successfully clicked on input element with name='search' within frame 0.\n";
} else {
    echo "Failed to click on input element with name='search' within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>