<?php
// Scenario: Demonstrate send_event_by_number function for sending events to DOM elements by their number

// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Send an event to an element by its number
echo "Example 1: Sending 'onclick' event to element by number<br>\n";
$elementNumber = 0; // First element on the page
$event = "onclick";

// Send event
$eventResult = DOM::$anchor->send_event_by_number($elementNumber, $event);

// Check the result
if ($eventResult) {
    echo "Successfully sent '{$event}' event to element with number {$elementNumber}<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 2: Send an event to an element by its number
echo "\n\nExample 2: Sending 'onmouseover' event to element by number<br>\n";
$elementNumber = 1; // Second element on the page
$event = "onmouseover";

// Send event
$eventResult2 = DOM::$anchor->send_event_by_number($elementNumber, $event);

// Check the result
if ($eventResult2) {
    echo "Successfully sent '{$event}' event to element with number {$elementNumber}<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 3: Send an event to an element by its number in a specific frame
echo "\n\nExample 3: Sending 'onclick' event to element by number in a specific frame<br>\n";
$elementNumber = 0; // First element in the frame
$event = "onclick";
$frame = 0; // First frame

// Send event
$eventResult3 = DOM::$anchor->send_event_by_number($elementNumber, $event, $frame);

// Check the result
if ($eventResult3) {
    echo "Successfully sent '{$event}' event to element with number {$elementNumber} in frame {$frame}<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist in the specified frame or error occurred.<br>\n";
}


// Quit the application
WINDOW::$app->quit();
?>