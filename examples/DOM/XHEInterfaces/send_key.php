<?php

// Scenario: Send key events to elements in a collection using JavaScript events
// Description: This example demonstrates how to get a collection of input elements and send key events to each element using JavaScript
// Classes used: XHEInterfaces, XHEInput, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example: Get all input elements and send key events to each element using JavaScript

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Clear all inputs first
    $clearResults = $inputs->set_value("");

    echo "Clear results:\n";
    foreach ($clearResults as $index => $result) {
        echo "Input " . ($index + 1) . ": " . ($result ? 'Cleared' : 'Failed to clear') . "\n";
    }

    // Send a character key event to all elements
    $charKey = "A";
    $keyResults = $inputs->send_key($charKey);

    echo "\nkey results for '" . $charKey . "':\n";
    foreach ($keyResults as $index => $result) {
        echo "Input " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send a special key event (Shift) to all elements
    $specialKey = "16"; // Shift key code
    $specialkeyResults = $inputs->send_key($specialKey, true);
    
    echo "\nSpecial key results (Shift):\n";
    foreach ($specialkeyResults as $index => $result) {
        echo "Input " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Get the updated values
    $updatedValues2 = $inputs->get_value();

    echo "\nUpdated values after second key press:\n";
    foreach ($updatedValues2 as $index => $value) {
        echo "Input " . ($index + 1) . ": " . $value . "\n";
    }
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>