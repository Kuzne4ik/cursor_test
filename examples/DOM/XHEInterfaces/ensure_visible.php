<?php

// Scenario: Ensure that elements in a collection are visible
// Description: This example demonstrates how to get a collection of elements and ensure each element is visible by scrolling to it
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
WEB::$browser->navigate(TEST_POLYGON_URL);

// Example: Get all anchor elements and ensure each element is visible

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Ensure all anchor elements are visible
    $result = $anchors->ensure_visible();
    
    // Display result
    if ($result) {
        echo "All anchor elements are now visible\n";
    } else {
        echo "Failed to make all anchor elements visible\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>