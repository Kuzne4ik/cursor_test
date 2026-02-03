<?php

// Scenario: Insert an element before an existing element in a collection
// Description: This example demonstrates how to get a collection of elements and insert a new element before each
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

// Example: Get all anchor elements and insert a new element before each

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Process each anchor to insert an element before it
    for ($k = 0; $k < $anchors->count(); $k++)
    {
        // Get the current anchor
        $currentAnchor = $anchors->get($k);
        
        // Check that the element exists
        if ($currentAnchor && $currentAnchor->is_exist())
        {
            echo "\nProcessing anchor #" . ($k + 1) . "\n";
            echo "Original anchor href: " . $currentAnchor->get_href() . "\n";
            echo "Original anchor inner text: " . $currentAnchor->get_inner_text() . "\n";
            
            // Insert a new element before the anchor
            $newTag = "span";
            $newHTML = "⇠ Link: ";
            $result = $currentAnchor->insert_before($newTag, $newHTML);
            
            // Check if the element was inserted successfully
            if ($result)
            {
                echo "Successfully inserted new element before anchor #" . ($k + 1) . "\n";
                // Note: The anchor's outer HTML would now include the new element before it
                echo "Operation completed successfully\n";
            }
            else
            {
                echo "Failed to insert new element before anchor #" . ($k + 1) . "\n";
            }
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