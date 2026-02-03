<?php

// Scenario: Send mouse move events relative to elements in a collection using JavaScript events
// Description: This example demonstrates how to get a collection of elements and send mouse move events relative to each element using JavaScript
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
WEB::$browser->navigate(TEST_POLYGON_URL . "checkbox.html");

// Example: Get all checkbox elements and send mouse move events relative to each element using JavaScript

// Get all checkbox elements on the page
$checkboxes = DOM::$checkbox->get_all();

// Check that we have found at least one checkbox
if ($checkboxes->count() > 0)
{
    echo "Found " . $checkboxes->count() . " checkbox elements\n";

    // Send mouse move event relative to all elements with default settings
    $results = $checkboxes->send_mouse_move();

    // Display results
    echo "Send mouse move results (default settings):\n";
    foreach ($results as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Wait a moment to see the result
    sleep(1);

    // Send mouse move event relative to all elements with specific offset and time
    $resultsWithOffset = $checkboxes->send_mouse_move(20, 20, 1000, 0);

    // Display results
    echo "\nSend mouse move results (with offset 20,20 and time 1000ms):\n";
    foreach ($resultsWithOffset as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Wait a moment to see the result
    sleep(1);

    // Send mouse move event relative to all elements with offset, time and tremble
    $resultsWithTremble = $checkboxes->send_mouse_move(-10, -10, 500, 5, "");

    // Display results
    echo "\nSend mouse move results (with offset -10,-10, time 500ms and tremble 5):\n";
    foreach ($resultsWithTremble as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Wait a moment to see the result
    sleep(1);

    // Send mouse move event relative to all elements with specific button state
    $resultsWithButtons = $checkboxes->send_mouse_move(0, 0, 0, 0, "left");

    // Display results
    echo "\nSend mouse move results (with left button pressed):\n";
    foreach ($resultsWithButtons as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Wait a moment to see the result
    sleep(1);
}
else
{
    echo "No checkbox elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>