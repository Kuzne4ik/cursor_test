<?php

// Scenario: Send mouse left button down events to elements in a collection using JavaScript events
// Description: This example demonstrates how to get a collection of elements and send mouse left button down events to each element using JavaScript
// Classes used: XHEInterfaces, XHECheckbox, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "checkbox.html");

// Example: Get all checkbox elements and send mouse left button down events to each element using JavaScript

// Get all checkbox elements on the page
$checkboxes = DOM::$checkbox->get_all();

// Check that we have found at least one checkbox
if ($checkboxes->count() > 0)
{
    echo "Found " . $checkboxes->count() . " checkbox elements\n";

    // Execute send_mouse_left_down for all checkboxes with default settings
    $results = $checkboxes->send_mouse_left_down(3, 3);

    // Display results
    echo "Send mouse left down results (default settings):\n";
    foreach ($results as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send mouse left button up event to complete the click
    $upResults = $checkboxes->send_mouse_left_up(3, 3);

    // Display results
    echo "\nSend mouse left up results (default settings):\n";
    foreach ($upResults as $index => $result) {
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