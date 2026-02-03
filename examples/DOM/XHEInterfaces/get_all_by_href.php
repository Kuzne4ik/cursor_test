<?php

// Scenario: Get all elements by href attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with a specific href attribute within that collection
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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchors.html");

// Example: Get all anchor elements and then find all anchors with a specific href attribute within that collection

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Try to find all anchors with a specific href (exact match)
    $targetHref = "http://example.com";
    $anchorsByHref = $anchors->get_all_by_href($targetHref, true);
    
    // Check if any anchors with the specified href were found
    if ($anchorsByHref->count() > 0)
    {
        echo "\nFound " . $anchorsByHref->count() . " anchor elements with href '" . $targetHref . "' (exact match):\n";
        
        // Process each found anchor
        for ($k = 0; $k < $anchorsByHref->count(); $k++)
        {
            $currentAnchor = $anchorsByHref->get($k);
            
            if ($currentAnchor && $currentAnchor->is_exist())
            {
                echo "\nAnchor #" . ($k + 1) . " with href '" . $targetHref . "':\n";
                echo "Anchor inner text: " . $currentAnchor->get_inner_text() . "\n";
                echo "Anchor inner number: " . $currentAnchor->inner_number . "\n";
                echo "Anchor name: " . $currentAnchor->get_name() . "\n";
            }
        }
    }
    else
    {
        echo "\nNo anchor elements with href '" . $targetHref . "' (exact match) found in the collection\n";
    }
    
    // Try to find all anchors with a partial href match
    $partialHref = "example";
    $anchorsByPartialHref = $anchors->get_all_by_href($partialHref, false);
    
    // Check if any anchors with the partial href were found
    if ($anchorsByPartialHref->count() > 0)
    {
        echo "\nFound " . $anchorsByPartialHref->count() . " anchor elements with partial href '" . $partialHref . "':\n";
        
        // Process each found anchor
        for ($k = 0; $k < $anchorsByPartialHref->count(); $k++)
        {
            $currentAnchor = $anchorsByPartialHref->get($k);
            
            if ($currentAnchor->is_exist())
            {
                echo "\nAnchor #" . ($k + 1) . " with partial href '" . $partialHref . "':\n";
                echo "Anchor inner text: " . $currentAnchor->get_inner_text() . "\n";
                echo "Anchor inner number: " . $currentAnchor->inner_number . "\n";
                echo "Full href: " . $currentAnchor->get_href() . "\n";
            }
        }
    }
    else
    {
        echo "\nNo anchor elements with partial href '" . $partialHref . "' found in the collection\n";
    }
    

    // Try to find all anchors with a non-existent href
    $nonExistentHref = "http://nonexistent.com";
    $anchorsByNonExistentHref = $anchors->get_all_by_href($nonExistentHref, true);
    
    // Check if any anchors with the non-existent href were found
    if ($anchorsByNonExistentHref->count() > 0)
    {
        echo "\nUnexpectedly found " . $anchorsByNonExistentHref->count() . " anchor elements with href '" . $nonExistentHref . "'\n";
    }
    else
    {
        echo "\nAs expected, no anchor elements with href '" . $nonExistentHref . "' found in the collection\n";
    }
    
    // Display all anchor hrefs in the collection for reference
    echo "\nAll anchor hrefs in the collection:\n";
    for ($k = 0; $k < $anchors->count(); $k++)
    {
        $currentAnchor = $anchors->get($k);
        
        if ($currentAnchor->is_exist())
        {
            $anchorHref = $currentAnchor->get_href();
            $anchorInnerText = $currentAnchor->get_inner_text();
            
            echo "Anchor #" . ($k + 1) . ": Href = '" . $anchorHref . "', Text = '" . $anchorInnerText . "'\n";
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