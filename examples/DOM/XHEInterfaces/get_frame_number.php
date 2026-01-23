<?php

// Scenario: Get frame numbers for a collection of elements
// Description: This example demonstrates how to get a collection of elements and retrieve the frame number for each element
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

// Navigate to the polygon page with frames if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "frame.html");

// Example: Get all anchor elements and retrieve the frame number for each anchor

// Get all anchor elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one anchor
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " anchor elements\n";
    
    // Get frame numbers for all anchor elements
    $frameNumbers = $inputs->get_frame_number();
    
    // Display frame numbers
    echo "Frame numbers for all anchors:\n";
    foreach ($frameNumbers as $index => $frameNumber) {
        echo "Anchor " . ($index + 1) . ": Frame " . $frameNumber . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>