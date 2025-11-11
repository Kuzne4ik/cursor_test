<?php
// Scenario: Send an event to a DOM element by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Send 'onfocus' event to the first input element on the page
$success = DOM::$element->send_event_by_number(0, "onfocus");

if ($success) {
    echo "Successfully sent 'onfocus' event to element with number 0\n";
} else {
    echo "Failed to send 'onfocus' event to element with number 0\n";
}

// Send 'onclick' event to the first input element on the page
$successClick = DOM::$element->send_event_by_number(0, "onclick");

if ($successClick) {
    echo "Successfully sent 'onclick' event to element with number 0\n";
} else {
    echo "Failed to send 'onclick' event to element with number 0\n";
}

// Example with frame parameter - send event to the first element in frame 0
$successInFrame = DOM::$element->send_event_by_number(0, "onfocus", "0");

if ($successInFrame) {
    echo "Successfully sent 'onfocus' event to element with number 0 in frame 0\n";
} else {
    echo "Failed to send 'onfocus' event to element with number 0 in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();