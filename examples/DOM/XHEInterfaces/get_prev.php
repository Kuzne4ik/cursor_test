<?php

// Scenario: Get the previous sibling element from a collection
// Description: This example demonstrates how to get a collection of elements and retrieve the previous sibling element for each
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

// Example: Get all anchor elements and retrieve their previous sibling elements

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get previous sibling elements for all anchors at once
    $prevElements = $anchors->get_prev();
    
    // Display results
    echo "\nGetting previous sibling elements for all anchors\n";
    
    // Process each anchor and its previous sibling
    $hrefs = $anchors->get_href();
    
    for ($k = 0; $k < $anchors->count(); $k++)
    {
        echo "\nProcessing anchor #" . ($k + 1) . "\n";
        echo "Current anchor href: " . $hrefs[$k] . "\n";
        
        // Check if the previous element exists
        if ($prevElements[$k] && $prevElements[$k]->is_exist())
        {
            echo "Previous element tag: " . $prevElements[$k]->get_tag() . "\n";
        }
        else
        {
            echo "No previous sibling element found\n";
        }
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>