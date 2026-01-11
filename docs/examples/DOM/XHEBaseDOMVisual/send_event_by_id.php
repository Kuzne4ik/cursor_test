<?php
// Scenario: Demonstrate send_event_by_id function for sending events to DOM elements by their id attribute
// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have id attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Send an event to an element by its exact id
echo "Example 1: Sending 'onclick' event to element by exact id<br>\n";
$idValue = "id_onclick1";
$exactly = true; // Exact match
$event = "onclick";

// Send event
$eventResult = DOM::$anchor->send_event_by_id($idValue, $exactly, $event);

// Check the result
if ($eventResult) {
    echo "Successfully sent '{$event}' event to element with id='{$idValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 2: Send an event to an element by partial id
echo "\n\nExample 2: Sending 'onclick' event to element by partial id<br>\n";
$idValue = "id_onclick"; // Partial match
$exactly = false; // Partial match
$event = "onclick";

// Send event
$eventResult2 = DOM::$anchor->send_event_by_id($idValue, $exactly, $event);

// Check the result
if ($eventResult2) {
    echo "Successfully sent '{$event}' event to element with partial id '{$idValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 3: Send an event to an element by id in a specific frame
echo "\n\nExample 3: Sending 'onclick' event to element by id in a specific frame<br>\n";
$idValue = "id_f0_onclick1";
$exactly = true;
$event = "onclick";
$frameNumber = 0; // First frame

// Send event
$eventResult3 = DOM::$anchor->send_event_by_id($idValue, $exactly, $event, $frameNumber);

// Check the result
if ($eventResult3) {
    echo "Successfully sent '{$event}' event to element with id='{$idValue}' in frame {$frameNumber}<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist in specified frame or error occurred.<br>\n";
}

// Example 4: Send a different event type
echo "\n\nExample 4: Sending 'onmouseover' event to element by id<br>\n";
$idValue = "id_mouseover1";
$exactly = true;
$event = "onmouseover";

// Send event
$eventResult4 = DOM::$anchor->send_event_by_id($idValue, $exactly, $event);

// Check the result
if ($eventResult4) {
    echo "Successfully sent '{$event}' event to element with id='{$idValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 5: Send event to a button element by id
echo "\n\nExample 5: Sending 'onclick' event to button element by id<br>\n";
$idValue = "bt1";
$exactly = true;
$event = "onclick";


// Quit the application
WINDOW::$app->quit();
?>