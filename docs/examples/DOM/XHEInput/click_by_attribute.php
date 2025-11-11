<?php
// Scenario: Click on an input element by its attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Click on an input element with id="search_input"
echo "Clicking on input element with id='search_input'...\n";
$result = DOM::$input->click_by_attribute("id", "search_input", true);
if ($result) {
    echo "Successfully clicked on input element with id='search_input'.\n";
} else {
    echo "Failed to click on input element with id='search_input'.\n";
}

// Example 2: Click on an input element with class="form-control"
echo "\nClicking on input element with class='form-control'...\n";
$result = DOM::$input->click_by_attribute("class", "form-control", true);
if ($result) {
    echo "Successfully clicked on input element with class='form-control'.\n";
} else {
    echo "Failed to click on input element with class='form-control'.\n";
}

// Example 3: Click on an input element with placeholder="Enter your email"
echo "\nClicking on input element with placeholder='Enter your email'...\n";
$result = DOM::$input->click_by_attribute("placeholder", "Enter your email", true);
if ($result) {
    echo "Successfully clicked on input element with placeholder='Enter your email'.\n";
} else {
    echo "Failed to click on input element with placeholder='Enter your email'.\n";
}

// Example 4: Click on an input element within a frame (frame=0) with type="text"
echo "\nClicking on input element with type='text' within frame 0...\n";
$result = DOM::$input->click_by_attribute("type", "text", true, "0");
if ($result) {
    echo "Successfully clicked on input element with type='text' within frame 0.\n";
} else {
    echo "Failed to click on input element with type='text' within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>