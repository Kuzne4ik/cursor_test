<?php
// Scenario: Example of getting the X coordinate of an element by its inner text

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "button.html");

// Example 1: Basic usage - get the X coordinate of an element by its inner text
$innerText = "Кнопка 1";

// Get the X coordinate of the element with inner text "Кнопка 1"
$xCoordinate = DOM::$button->get_x_by_inner_text($innerText, false);

if ($xCoordinate !== -1) {
    echo "X coordinate of element with inner text '$innerText': $xCoordinate\n\n";
} else {
    echo "Failed to get X coordinate of element with inner text '$innerText'\n\n";
}


// Quit the application
WINDOW::$app->quit();