<?php

// Scenario: Clone elements from a collection
// Description: This example demonstrates how to get a collection of elements and clone each element in the collection
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

// Example: Get all anchor elements and clone each anchor element

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Clone all anchor elements
    $clonedAnchors = $anchors->get_clone();
    
    // Display information about the cloned anchors
    echo "Cloned anchors information:\n";
    
    // Get href attributes for all original anchor elements
    foreach ($clonedAnchors as $index => $clonedAnchor) {
        echo "Cloned anchor " . ($index + 1) . ": " . $clonedAnchor->get_href() . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>