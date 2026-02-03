<?php

// Scenario: Send key up events to elements in a collection using JavaScript events
// Description: This example demonstrates how to get a collection of input elements and send key up events to each element using JavaScript
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

// Example: Get all input elements and send key up events to each element using JavaScript

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

    // Send a character key down event to all elements
    $charKey = "A";
    $keyDownResults = $inputs->send_key_down($charKey);

    echo "\nKey down results for '" . $charKey . "':\n";
    foreach ($keyDownResults as $index => $result) {
        echo "Input " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send key up event to complete the key press for all elements
    $keyUpResults = $inputs->send_key_up($charKey);

    echo "\nKey up results for '" . $charKey . "':\n";
    foreach ($keyUpResults as $index => $result) {
        echo "Input " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }

    // Send a special key down event (Shift) to all elements
    $specialKey = "16"; // Shift key code
    $specialKeyDownResults = $inputs->send_key_down($specialKey, true);

    echo "\nSpecial key down results (Shift):\n";
    foreach ($specialKeyDownResults as $index => $result) {
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