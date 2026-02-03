<?php

// Scenario: Get all elements by inner text from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with specific inner text within that collection
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

// Example: Get all anchor elements and then find all anchors with specific inner text within that collection

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Try to find all anchors with a specific inner text (exact match)
    $targetText = "Example";
    $anchorsByText = $anchors->get_all_by_inner_text($targetText, true);
    
    // Check if any anchors with the specified inner text were found
    if ($anchorsByText->count() > 0)
    {
        echo "\nFound " . $anchorsByText->count() . " anchor elements with inner text '" . $targetText . "' (exact match):\n";
        
        // Process each found anchor
        for ($k = 0; $k < $anchorsByText->count(); $k++)
        {
            $currentAnchor = $anchorsByText->get($k);
            
            if ($currentAnchor->is_exist())
            {
                echo "\nAnchor #" . ($k + 1) . " with inner text '" . $targetText . "':\n";
                echo "Anchor href: " . $currentAnchor->get_href() . "\n";
                echo "Anchor inner number: " . $currentAnchor->inner_number . "\n";
            }
        }
    }
    else
    {
        echo "\nNo anchor elements with inner text '" . $targetText . "' (exact match) found in the collection\n";
    }
    
    // Try to find all anchors with a partial inner text match
    $partialText = "Exam";
    $anchorsByPartialText = $anchors->get_all_by_inner_text($partialText, false);
    
    // Check if any anchors with the partial inner text were found
    if ($anchorsByPartialText->count() > 0)
    {
        echo "\nFound " . $anchorsByPartialText->count() . " anchor elements with partial inner text '" . $partialText . "':\n";
        
        // Process each found anchor
        for ($k = 0; $k < $anchorsByPartialText->count(); $k++)
        {
            $currentAnchor = $anchorsByPartialText->get($k);
            
            if ($currentAnchor->is_exist())
            {
                echo "\nAnchor #" . ($k + 1) . " with partial inner text '" . $partialText . "':\n";
                echo "Anchor href: " . $currentAnchor->get_href() . "\n";
                echo "Anchor inner number: " . $currentAnchor->inner_number . "\n";
                echo "Full inner text: " . $currentAnchor->get_inner_text() . "\n";
            }
        }
    }
    else
    {
        echo "\nNo anchor elements with partial inner text '" . $partialText . "' found in the collection\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>