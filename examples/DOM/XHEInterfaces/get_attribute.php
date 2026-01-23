<?php

// Scenario: Get custom attributes for a collection of elements
// Description: This example demonstrates how to get a collection of elements and retrieve a specific attribute for each element
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
WEB::$browser->navigate(TEST_POLYGON_URL);

// Example: Get all anchor elements and retrieve a custom attribute for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get a specific attribute (e.g., 'title') for all anchor elements
    $attributeName = "title";
    $attributes = $anchors->get_attribute($attributeName);
    
    // Display attributes
    echo "Attribute '" . $attributeName . "' for all anchors:\n";
    foreach ($attributes as $index => $attribute) {
        echo "Anchor " . ($index + 1) . ": " . $attribute . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>