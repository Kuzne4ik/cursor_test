<?php
// Scenario: Example of getting the X coordinate of an element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get the X coordinate of an element by its number
$elementNumber = 0; // First element on the page

// Get the X coordinate of the first element
$xCoordinate = DOM::$input->get_x_by_number($elementNumber);

if ($xCoordinate !== -1) {
    echo "X coordinate of element #$elementNumber: $xCoordinate\n\n";
} else {
    echo "Failed to get X coordinate of element #$elementNumber\n\n";
}

// Example 2: Get the X coordinate of another element
$elementNumber = 1; // Second element on the page

// Get the X coordinate of the second element
$xCoordinate = DOM::$input->get_x_by_number($elementNumber);

if ($xCoordinate !== -1) {
    echo "X coordinate of element #$elementNumber: $xCoordinate\n\n";
} else {
    echo "Failed to get X coordinate of element #$elementNumber\n\n";
}

// Example 3: Get the X coordinate of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0; // First element in the frame

// Get the X coordinate of the first element within the first frame
$xCoordinate = DOM::$input->get_x_by_number($elementNumber, 0);

if ($xCoordinate !== -1) {
    echo "X coordinate of element #$elementNumber in frame 0: $xCoordinate\n\n";
} else {
    echo "Element #$elementNumber not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();