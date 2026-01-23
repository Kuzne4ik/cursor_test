<?php

// Scenario: Get a specific element from a collection by index
// Description: This example demonstrates how to get a collection of anchor elements and retrieve a specific element by its index
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

// Example: Get all anchor elements and retrieve a specific element by index

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get the first anchor from the collection (index 0)
    $firstAnchor = $anchors->get(0);
    
    // Check that the element was retrieved successfully
    if ($firstAnchor && $firstAnchor->is_exist())
    {
        echo "Successfully retrieved the first anchor\n";
        
        // Display the href of the first anchor
        echo "First anchor href: " . $firstAnchor->get_href() . "\n";
        echo "First anchor inner text: " . $firstAnchor->get_inner_text() . "\n";
    }
    else
    {
        echo "Failed to retrieve the first anchor\n";
    }
    
    // If there are at least 2 anchors, get the second one
    if ($anchors->count() > 1)
    {
        // Get the second anchor from the collection (index 1)
        $secondAnchor = $anchors->get(1);
        
        // Check that the element was retrieved successfully
        if ($secondAnchor && $secondAnchor->is_exist())
        {
            echo "\nSuccessfully retrieved the second anchor\n";
            
            // Display the href of the second anchor
            echo "Second anchor href: " . $secondAnchor->get_href() . "\n";
            echo "Second anchor inner text: " . $secondAnchor->get_inner_text() . "\n";
        }
        else
        {
            echo "Failed to retrieve the second anchor\n";
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