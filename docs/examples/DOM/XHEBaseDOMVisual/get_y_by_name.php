<?php
// Scenario: Example of getting the Y coordinate of an element by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Basic usage - get the Y coordinate of an element by its name attribute
$elementName = "id0";

// Get the Y coordinate of the element with name="id0"
$yCoordinate = DOM::$input->get_y_by_name($elementName);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with name '$elementName': $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element with name '$elementName'\n\n";
}

// Example 2: Get the Y coordinate of another element
$elementName = "id1";

// Get the Y coordinate of the element with name="id1"
$yCoordinate = DOM::$input->get_y_by_name($elementName);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with name '$elementName': $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element with name '$elementName'\n\n";
}

// Example 3: Get the Y coordinate of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementName = "fr_id0";

// Get the Y coordinate of the element with name="fr_id0" within the first frame
$yCoordinate = DOM::$input->get_y_by_name($elementName, 0);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with name '$elementName' in frame 0: $yCoordinate\n\n";
} else {
    echo "Element with name '$elementName' not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();