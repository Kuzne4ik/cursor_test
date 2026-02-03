<?php

// Scenario: Get all events for a collection of elements
// Description: This example demonstrates how to get a collection of elements and retrieve all events for each element
// Classes used: XHEInterfaces, XHEAnchor, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL);

// Example: Get all anchor elements and retrieve all events for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get all events for all anchor elements
    $allEvents = $anchors->get_all_events();
    
    // Display events
    echo "All events for all anchors:\n";
    foreach ($allEvents as $index => $events) {
        echo "Anchor " . ($index + 1) . " events:\n";
        if (is_array($events)) {
            foreach ($events as $event) {
                echo "  " . $event . "\n";
            }
        } else {
            echo "  No events found\n";
        }
        echo "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>