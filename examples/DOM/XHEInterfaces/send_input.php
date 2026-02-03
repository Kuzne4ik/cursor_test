<?php

// Scenario: Send input text to elements in a collection using JavaScript events
// Description: This example demonstrates how to get a collection of input elements and send input text to each element using JavaScript events
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

// Example: Get all input elements and send input text to each element using JavaScript events

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Send input text to all elements at once
    $inputText = "Test Input to All Elements";
    $results = $inputs->send_input($inputText);
    
    // Display results
    echo "Send input results:\n";
    foreach ($results as $index => $result) {
        echo "Input " . ($index + 1) . ": " . ($result ? 'Success' : 'Failed') . "\n";
    }
    
    // Clear all inputs at once
    $clearResults = $inputs->set_value("");
    
    // Send input text with specific timeout to all elements
    $inputText2 = "Delayed Input to All Elements";
    $resultsWithTimeout = $inputs->send_input($inputText2, "1:2");
    
    // Display results with timeout
    echo "\nSend input with timeout results:\n";
    foreach ($resultsWithTimeout as $index => $result) {
        echo "Input " . ($index + 1) . ": " . ($result ? 'Success with timeout' : 'Failed with timeout') . "\n";
    }
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>