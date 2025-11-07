<?php

// Scenario: Get elements by href attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their href attribute within that collection
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

// Example: Get all anchor elements and then find specific anchors by their href attribute within that collection

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Try to find an anchor with a specific href (exact match) in anchor elements
    $targetHref = "http://example.com";
    $anchorByHref = $anchors->get_by_href($targetHref, true);
    
    // Check if the anchor with the specified href was found in anchor elements and exists
    if ($anchorByHref && $anchorByHref->is_exist())
    {
        echo "\nFound anchor with href '" . $targetHref . "' (exact match):\n";
        echo "Anchor inner text: " . $anchorByHref->get_inner_text() . "\n";
        echo "Anchor inner number: " . $anchorByHref->inner_number . "\n";
        echo "Anchor name: " . $anchorByHref->get_name() . "\n";
    }
    else
    {
        echo "\nNo anchor with href '" . $targetHref . "' (exact match) found in the collection\n";
    }
    
    // Try to find an anchor with a partial href match in anchor elements and exists
    $partialHref = "example";
    $anchorByPartialHref = $anchors->get_by_href($partialHref, false);
    
    // Check if the anchor with the partial href was found in anchor elements
    if ($anchorByPartialHref && $anchorByPartialHref->is_exist())
    {
        echo "\nFound anchor with partial href '" . $partialHref . "':\n";
        echo "Anchor inner text: " . $anchorByPartialHref->get_inner_text() . "\n";
        echo "Anchor inner number: " . $anchorByPartialHref->inner_number . "\n";
        echo "Full href: " . $anchorByPartialHref->get_href() . "\n";
    }
    else
    {
        echo "\nNo anchor with partial href '" . $partialHref . "' found in the collection\n";
    }
    
    // Try to find an anchor with a non-existent href
    $nonExistentHref = "http://nonexistent.com";
    $anchorByNonExistentHref = $anchors->get_by_href($nonExistentHref, true);
    
    // Check if the anchor with the non-existent href was found
    if ($anchorByNonExistentHref && $anchorByNonExistentHref->is_exist())
    {
        echo "\nUnexpectedly found anchor with href '" . $nonExistentHref . "'\n";
    }
    else
    {
        echo "\nAs expected, no anchor with href '" . $nonExistentHref . "' found in the collection\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>