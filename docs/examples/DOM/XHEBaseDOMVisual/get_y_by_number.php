<?php
// Scenario: Example of getting the Y coordinate of an element by its number

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "button.html");

// Example 1: Basic usage - get the Y coordinate of an element by its number
$elementNumber = 0; // First element on the page

// Get the Y coordinate of the first element
$yCoordinate = DOM::$input->get_y_by_number($elementNumber);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element #$elementNumber: $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element #$elementNumber\n\n";
}

// Example 2: Get the Y coordinate of another element
$elementNumber = 1; // Second element on the page

// Get the Y coordinate of the second element
$yCoordinate = DOM::$input->get_y_by_number($elementNumber);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element #$elementNumber: $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element #$elementNumber\n\n";
}

// Example 3: Get the Y coordinate of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0; // First element in the frame

// Get the Y coordinate of the first element within the first frame
$yCoordinate = DOM::$input->get_y_by_number($elementNumber, 0);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element #$elementNumber in frame 0: $yCoordinate\n\n";
} else {
    echo "Element #$elementNumber not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();