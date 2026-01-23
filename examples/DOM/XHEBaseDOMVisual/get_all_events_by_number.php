<?php
// Scenario: Example of getting all events of an element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having events
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Basic usage - get all events of an element by its number
$elementNumber = 1;

// Get all events of the first element (index 0)
$events = DOM::$input->get_all_events_by_number($elementNumber);

if ($events !== "") {
    echo "All events of element #$elementNumber: $events\n\n";
} else {
    echo "Failed to get events of element #$elementNumber\n\n";
}

// Example 2: Get all events of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 2;

// Get all events of an element within the first frame
$events = DOM::$input->get_all_events_by_number($elementNumber, 0);

if ($events !== "") {
    echo "All events of element #$elementNumber in frame 0: $events\n\n";
} else {
    echo "Element #$elementNumber not found in frame 0 or has no events\n\n";
}

// Quit the application
WINDOW::$app->quit();