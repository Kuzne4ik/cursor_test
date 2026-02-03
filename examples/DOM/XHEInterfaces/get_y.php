<?php

// Scenario: Get Y coordinate for elements in a collection
// Description: This example demonstrates how to get a collection of elements and then get the Y coordinate for each element in the collection
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

// Example: Get all anchor elements and then get the Y coordinate for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get Y coordinates for all anchors
    $yCoordinates = $anchors->get_y();
    
    // Display Y coordinates for each anchor
    foreach ($yCoordinates as $index => $yCoordinate)
    {
        echo "\nAnchor #" . ($index + 1) . " Y coordinate: " . $yCoordinate . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>