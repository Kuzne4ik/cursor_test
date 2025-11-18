<?php
// Scenario: Example of getting all events of an element by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with elements having events
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Basic usage - get all events of an element by its name attribute
$elementName = "id0";

// Get all events of element with name="submit_button"
$events = DOM::$input->get_all_events_by_name($elementName);

if ($events !== "") {
    echo "All events of element with name '$elementName': $events\n\n";
} else {
    echo "Failed to get events of element with name '$elementName'\n\n";
}

// Example 2: Get all events of another element by its name attribute
$elementName = "id3";

// Get all events of element with name="cancel_button"
$events = DOM::$input->get_all_events_by_name($elementName);

if ($events !== "") {
    echo "All events of element with name '$elementName': $events\n\n";
} else {
    echo "Failed to get events of element with name '$elementName'\n\n";
}
// Example 3: Get all events of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementName = "frame_button";

// Get all events of an element within the first frame
$events = DOM::$element->get_all_events_by_name($elementName, 0);

if ($events !== "") {
    echo "All events of element with name '$elementName' in frame 0: $events\n\n";
} else {
    echo "Element with name '$elementName' not found in frame 0 or has no events\n\n";
}

// Quit the application
WINDOW::$app->quit();