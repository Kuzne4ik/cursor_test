<?php

// Scenario: Get elements by inner text from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their inner text within that collection
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

// Example: Get all anchor elements and then find specific anchors by their inner text within that collection

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Try to find an anchor with a specific inner text (exact match) in anchor elements
    $targetText = "Example Link";
    $anchorByText = $anchors->get_by_inner_text($targetText, true);
    
    // Check if the anchor with the specified inner text was found in anchor elements and exists
    if ($anchorByText && $anchorByText->is_exist())
    {
        echo "\nFound anchor with inner text '" . $targetText . "' (exact match):\n";
        echo "Anchor href: " . $anchorByText->get_href() . "\n";
        echo "Anchor inner number: " . $anchorByText->inner_number . "\n";
    }
    else
    {
        echo "\nNo anchor with inner text '" . $targetText . "' (exact match) found in the collection\n";
    }
    
    // Try to find an anchor with a partial inner text match in anchor elements
    $partialText = "Link";
    $anchorByPartialText = $anchors->get_by_inner_text($partialText, false);
    
    // Check if the anchor with the partial inner text was found in anchor elements and exists
    if ($anchorByPartialText && $anchorByPartialText->is_exist())
    {
        echo "\nFound anchor with partial inner text '" . $partialText . "':\n";
        echo "Anchor href: " . $anchorByPartialText->get_href() . "\n";
        echo "Anchor inner number: " . $anchorByPartialText->inner_number . "\n";
        echo "Full inner text: " . $anchorByPartialText->get_inner_text() . "\n";
    }
    else
    {
        echo "\nNo anchor with partial inner text '" . $partialText . "' found in the collection\n";
    }

    // Try to find an anchor with another inner text
    $targetText2 = "Test";
    $anchorByText2 = $anchors->get_by_inner_text($targetText2, true);
    
    // Check if the anchor with the specified inner text was found
    if ($anchorByText2 && $anchorByText2->is_exist())
    {
        echo "\nFound anchor with inner text '" . $targetText2 . "':\n";
        echo "Anchor href: " . $anchorByText2->get_href() . "\n";
        echo "Anchor inner number: " . $anchorByText2->inner_number . "\n";
        
        // Add a new attribute to the found anchor
        $attrResult = $anchorByText2->set_attribute("data-found", "true");
        
        if ($attrResult)
        {
            echo "Successfully added data-found attribute to the anchor\n";
        }
        else
        {
            echo "Failed to add attribute to the anchor\n";
        }
    }
    else
    {
        echo "\nNo anchor with inner text '" . $targetText2 . "' found in the collection\n";
    }
    
    // Try to find an anchor with a non-existent inner text in anchor elements
    $nonExistentText = "NonExistentLink";
    $anchorByNonExistentText = $anchors->get_by_inner_text($nonExistentText, true);
    
    // Check if the anchor with the non-existent inner text was found in anchor elements and exists
    if ($anchorByNonExistentText && $anchorByNonExistentText->is_exist())
    {
        echo "\nUnexpectedly found anchor with inner text '" . $nonExistentText . "'\n";
    }
    else
    {
        echo "\nAs expected, no anchor with inner text '" . $nonExistentText . "' found in the collection\n";
    }
    
    // Display all anchor inner texts in the collection for reference
    echo "\nAll anchor inner texts in the collection:\n";
    for ($i = 0; $i < $anchors->count(); $i++)
    {
        $currentAnchor = $anchors->get($i);
        
        if ($currentAnchor && $currentAnchor->is_exist())
        {
            $anchorInnerText = $currentAnchor->get_inner_text();
            $anchorHref = $currentAnchor->get_href();
            
            echo "Anchor #" . ($i + 1) . ": Text = '" . $anchorInnerText . "', Href = '" . $anchorHref . "'\n";
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