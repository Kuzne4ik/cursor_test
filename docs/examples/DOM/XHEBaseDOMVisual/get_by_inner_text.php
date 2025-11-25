<?php
// Scenario: Example of getting an element by its inner text

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get an element by its inner text
$innerText = "Форма 1"; // Inner text of a button

// Get the element by its inner text (exact match)
$foundElement = DOM::$h4->get_by_inner_text($innerText, true);

// Check if the element exists
if ($foundElement->is_exist()) {
    echo "Element with inner text '$innerText' exists.\n";
} else {
    echo "Element with inner text '$innerText' does not exist.\n";
}

echo "\n";

// Quit the application
WINDOW::$app->quit();