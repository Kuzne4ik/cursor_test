<?php
// Scenario: Demonstrate send_event_by_href function for sending events to DOM elements by their href attribute

// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Send an event to an element by its exact href
echo "Example 1: Sending 'onmouseover' event to element by exact href<br>\n";
$hrefValue = "https://example.com/mouseover1";
$exactly = true; // Exact match
$event = "onmouseover";

// Send event
$eventResult = DOM::$anchor->send_event_by_href($hrefValue, $exactly, $event);

// Check the result
if ($eventResult) {
    echo "Successfully sent '{$event}' event to element with href='{$hrefValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 2: Send an onmousedown to an element by partial href
echo "\n\nExample 2: Sending 'onmousedown' event to element by partial href<br>\n";
$hrefValue = "mousedown2"; // Partial match
$exactly = false; // Partial match
$event = "onmousedown";

// Send event
$eventResult2 = DOM::$anchor->send_event_by_href($hrefValue, $exactly, $event);

// Check the result
if ($eventResult2) {
    echo "Successfully sent '{$event}' event to element with partial href '{$hrefValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 3: Send an event to an element by href in a specific frame
echo "\n\nExample 3: Sending 'onmouseover2' event to element by href in a specific frame<br>\n";
$hrefValue = "https://example.com/frame0/mouseover1";
$exactly = true;
$event = "onmouseover2";
$frame = 0; // First frame

// Send event
$eventResult3 = DOM::$anchor->send_event_by_href($hrefValue, $exactly, $event, $frame);

// Check the result
if ($eventResult3) {
    echo "Successfully sent '{$event}' event to element with href='{$hrefValue}' in frame {$frame}<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist in specified frame or error occurred.<br>\n";
}

// Quit the application
WINDOW::$app->quit();
?>