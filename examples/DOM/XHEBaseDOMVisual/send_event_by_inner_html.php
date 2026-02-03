<?php
// Scenario: Demonstrate send_event_by_inner_html function for sending events to DOM elements by their inner HTML
// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Send an event to an element by its exact inner HTML
echo "Example 1: Sending 'onclick' event to element by exact inner HTML<br>\n";
$innerHtml = "Блог";
$exactly = true; // Exact match
$event = "onclick";

// Send event
$eventResult = DOM::$anchor->send_event_by_inner_html($innerHtml, $exactly, $event);

// Check the result
if ($eventResult) {
    echo "Successfully sent '{$event}' event to element with inner HTML '{$innerHtml}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 2: Send an event to an element by partial inner HTML
echo "\n\nExample 2: Sending 'onclick' event to element by partial inner HTML<br>\n";
$innerHtml = "Блог"; // Partial match
$exactly = false; // Partial match
$event = "onclick";

// Send event
$eventResult2 = DOM::$anchor->send_event_by_inner_html($innerHtml, $exactly, $event);

// Check the result
if ($eventResult2) {
    echo "Successfully sent '{$event}' event to element with partial inner HTML '{$innerHtml}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Quit the application
WINDOW::$app->quit();
?>