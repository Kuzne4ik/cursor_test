<?php

// Scenario: Send touch events to elements in a collection
// Description: This example demonstrates how to get a collection of elements and send touch events to each element
// Classes used: XHEInterfaces, XHEAnchor, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all checkbox elements and send touch events to each element

// Get all h3 elements on the page
$headers = DOM::$h3->get_all();

// Check that we have found at least one header 3
if ($headers->count() > 0)
{
    echo "Found " . $headers->count() . " checkbox elements\n";

    // Send touch start event to all elements
    $touchStartResults = $headers->send_touch(0, 1); // touch_id=0, touch_type=1

    // Display results
    echo "Send touch start results:\n";
    foreach ($touchStartResults as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send touch end event to all elements
    $touchEndResults = $headers->send_touch(0, 1); // touch_id=0, touch_type=1

    // Display results
    echo "\nSend touch end results:\n";
    foreach ($touchEndResults as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send touch move event to all elements with specific parameters
    $touchMoveResults = $headers->send_touch(2, 1, -1, -1, 20, 20, 45.0, 0.5, 0, 0);
    // touch_id=2, touch_type=1 (move), dx=10, dy=10, radiusX=20, radiusY=20, rotationAngle=45.0, pressure=0.5

    // Display results
    echo "\nSend touch move results (with specific parameters):\n";
    foreach ($touchMoveResults as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }
}
else
{
    echo "No checkbox elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>