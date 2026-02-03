<?php

// Scenario: Get height for elements in a collection
// Description: This example demonstrates how to get a collection of elements and then get the height for each element in the collection
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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all anchor elements and get height for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get heights for all anchor elements
    $heights = $anchors->get_height();
    
    // Display heights
    echo "Heights for all anchors:\n";
    foreach ($heights as $index => $height) {
        echo "Anchor " . ($index + 1) . ": " . $height . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>