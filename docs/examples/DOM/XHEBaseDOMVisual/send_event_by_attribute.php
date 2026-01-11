<?php
// Scenario: Demonstrate the send_event_by_attribute function for sending events to DOM elements by their attributes
// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have various attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "button.html");
WEB::$browser->wait_for();

// Example 1: Send an event to an element by its attribute
echo "Example 1: Sending 'onclick' event to element by attribute<br>\n";
$attrName = "name";
$attrValue = "btn1";
$exactly = true; // Exact match
$event = "onclick";

// Send event
$eventResult = DOM::$button->send_event_by_attribute($attrName, $attrValue, $exactly, $event);

// Check the result
if ($eventResult) {
    echo "Successfully sent '{$event}' event to element with {$attrName}='{$attrValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Example 2: Send an event to an element by partial attribute value
echo "\n\nExample 2: Sending 'onclick' event to element by partial attribute value<br>\n";
$attrName = "name";
$attrValue = "btn"; // Partial match
$exactly = false; // Partial match
$event = "onclick";

// Send event
$eventResult2 = DOM::$button->send_event_by_attribute($attrName, $attrValue, $exactly, $event);

// Check the result
if ($eventResult2) {
    echo "Successfully sent '{$event}' event to element with partial {$attrName}='{$attrValue}'<br>\n";
} else {
    echo "Failed to send '{$event}' event. Element may not exist or error occurred.<br>\n";
}

// Quit the application
WINDOW::$app->quit();
?>