<?php
// Scenario: Click on an input element by its number on the page

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for the page to load
WEB::$browser->wait_for();

// Example 1: Click on the first input element on the page by its number
echo "Clicking on the first input element (number 0)...\n";
$result = DOM::$input->click_by_number(0);
if ($result) {
    echo "Successfully clicked on the first input element.\n";
} else {
    echo "Failed to click on the first input element.\n";
}

// Example 2: Click on the second input element on the page by its number
echo "\nClicking on the second input element (number 1)...\n";
$result = DOM::$input->click_by_number(1);
if ($result) {
    echo "Successfully clicked on the second input element.\n";
} else {
    echo "Failed to click on the second input element.\n";
}

// Example 3: Click on an input element within a frame (frame=0)
echo "\nClicking on an input element within a frame (frame=0)...\n";
$result = DOM::$input->click_by_number(0, "0");
if ($result) {
    echo "Successfully clicked on the input element within frame 0.\n";
} else {
    echo "Failed to click on the input element within frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>