<?php

// Scenario: Send JavaScript events to a collection of DOM elements
// Description: This example demonstrates how to get a collection of input elements and send JavaScript events to each element
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

// Example: Get all input elements and send events to each

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Send 'mouseover' event to all inputs
    $results = $inputs->event("mouseover", true);
    
    // Check if all events were sent successfully
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully sent 'mouseover' event to " . $successCount . " out of " . $inputs->count() . " inputs\n";
    
    // Send 'click' event to all inputs
    $results = $inputs->event("click", true);
    
    // Check if all events were sent successfully
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully sent 'click' event to " . $successCount . " out of " . $inputs->count() . " inputs\n";
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>