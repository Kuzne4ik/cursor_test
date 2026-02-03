<?php
// Scenario: Example of getting all events of an element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having events
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get all events of an element by its src attribute
$srcValue = "./screenshots/02.jpg";

// Get all events of element with src="images/logo.png"
$events = DOM::$image->get_all_events_by_src($srcValue);

if ($events !== "") {
    echo "All events of element with src '$srcValue': $events\n\n";
} else {
    echo "Failed to get events of element with src '$srcValue'\n\n";
}

// Example 2: Get all events of an element within a specific frame
// This example assumes there is a frame with index 0 on the page
$srcValue = "./screenshots/02.jpg";

// Get all events of an element within the first frame
$events = DOM::$image->get_all_events_by_src($srcValue, 0);

if ($events !== "") {
    echo "All events of element with src '$srcValue' in frame 0: $events\n\n";
} else {
    echo "Element with src '$srcValue' not found in frame 0 or has no events\n\n";
}

// Quit the application
WINDOW::$app->quit();