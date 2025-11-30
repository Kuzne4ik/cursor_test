<?php
// Scenario: Demonstrate send_event_by_name function for sending events to DOM elements by their name attribute

// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Send an event to an element by its exact name
echo "Example 1: Sending 'onclick' event to element by exact name<br>\n";
$nameValue = "id_onclick1";
$event = "onclick";

// Send event
$eventResult = DOM::$anchor->send_event_by_name($nameValue, $event);

// Check the result
if ($eventResult) {
    echo "Successfully sent '{$event}' event to element with name='{$nameValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 2: Send an event to an element by partial name
echo "\n\nExample 2: Sending 'onclick' event to element by partial name<br>\n";
$nameValue = "onclick"; // Partial match
$event = "onclick";

// Send event
$eventResult2 = DOM::$anchor->send_event_by_name($nameValue, $event);

// Check the result
if ($eventResult2) {
    echo "Successfully sent '{$event}' event to element with partial name '{$nameValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 3: Send an event to an element by name in a specific frame
echo "\n\nExample 3: Sending 'onmouseover' event to element by name in a specific frame<br>\n";
$nameValue = "id_f0_onclick1";
$event = "onmouseover";
$frame = 0; // First frame

// Send event
$eventResult3 = DOM::$anchor->send_event_by_name($nameValue, $event, $frame);

// Check the result
if ($eventResult3) {
    echo "Successfully sent '{$event}' event to element with name='{$nameValue}' in frame {$frame}<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist in the specified frame or error occurred.<br>\n";
}


// Quit the application
WINDOW::$app->quit();
?>