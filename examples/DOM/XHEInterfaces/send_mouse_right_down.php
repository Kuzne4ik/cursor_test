<?php

// Scenario: Send mouse right button down events to elements in a collection using JavaScript events
// Description: This example demonstrates how to get a collection of elements and send mouse right button down events to each element using JavaScript
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

// Example: Get all checkbox elements and send mouse right button down events to each element using JavaScript

// Get all checkbox elements on the page
$checkboxes = DOM::$checkbox->get_all();

// Check that we have found at least one checkbox
if ($checkboxes->count() > 0)
{
    echo "Found " . $checkboxes->count() . " checkbox elements\n";

    // Send mouse right button down event to all elements with default settings
    $results = $checkboxes->send_mouse_right_down(3, 3);

    // Display results
    echo "Send mouse right down results (default settings):\n";
    foreach ($results as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send mouse right button up event to complete the click
    $upResults = $checkboxes->send_mouse_right_up(3, 3);

    // Display results
    echo "\nSend mouse right up results (default settings):\n";
    foreach ($upResults as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send mouse right button down event to all elements with specific offset
    $resultsWithOffset = $checkboxes->send_mouse_right_down(10, 10);

    // Display results
    echo "\nSend mouse right down results (with offset 10,10):\n";
    foreach ($resultsWithOffset as $index => $result) {
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