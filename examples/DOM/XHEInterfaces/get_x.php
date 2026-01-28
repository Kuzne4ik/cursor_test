<?php

// Scenario: Get X coordinate for elements in a collection
// Description: This example demonstrates how to get a collection of elements and then get the X coordinate for each element in the collection
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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchors.html");

// Example: Get all anchor elements and then get the X coordinate for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get X coordinates for all anchors at once
    $xCoordinates = $anchors->get_x();
    
    // Display results
    echo "\nGetting X coordinates for all anchors\n";
    
    for ($k = 0; $k < $anchors->count(); $k++)
    {
        echo "\nProcessing anchor #" . ($k + 1) . "\n";
        echo "Anchor X coordinate: " . $xCoordinates[$k] . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>