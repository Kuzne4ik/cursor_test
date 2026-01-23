<?php

// Scenario: Click on elements in a collection using mouse events
// Description: This example demonstrates how to get a collection of elements and click on each element using mouse events
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

// Example: Get all checkbox elements and click on each element using mouse events

// Get all checkbox elements on the page
$checkboxes = DOM::$checkbox->get_all();

// Check that we have found at least one checkbox
if ($checkboxes->count() > 0)
{
    echo "Found " . $checkboxes->count() . " checkbox elements\n";

    // Execute double-click for each checkbox
    $clickResults = $checkboxes->mouse_click(3, 3);

    // Display href attributes
    echo "Click results:\n";
    foreach ($clickResults as $index => $result) {
        echo "Checkbox " . ($index + 1) . ": " . ($result ? 'Yes' : 'No') . "\n";
    }
}
else
{
    echo "No checkbox elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>