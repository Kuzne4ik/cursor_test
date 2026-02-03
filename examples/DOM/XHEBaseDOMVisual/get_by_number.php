<?php
// Scenario: Example of getting an element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get an element by its number
$elementNumber = 0; // First element on the page

// Get the element by its number
$foundElement = DOM::$anchor->get_by_number($elementNumber);

// Check if the element exists
if ($foundElement->is_exist()) {
    echo "Element with number $elementNumber exists.\n";
} else {
    echo "Element with number $elementNumber does not exist.\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();