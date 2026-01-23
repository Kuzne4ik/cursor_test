<?php

// Scenario: Check if elements in a collection are currently in view
// Description: This example demonstrates how to get a collection of elements and check if each element is currently in the viewport
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

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all anchor elements and check if each element is currently in view

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Check if all anchor elements are currently in view
    $viewStates = $anchors->is_view_now();
    
    // Display view states
    echo "View states for all anchors:\n";
    foreach ($viewStates as $index => $isInView) {
        $state = $isInView ? "in view" : "not in view";
        echo "Anchor " . ($index + 1) . ": " . $state . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>