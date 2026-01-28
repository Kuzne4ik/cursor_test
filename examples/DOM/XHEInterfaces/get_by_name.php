<?php

// Scenario: Get elements by name from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by name within that collection
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

// Example: Get all anchor elements and then find specific anchors by name within that collection

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Try to find an anchor with a specific name in anchor elements (exact match)
    $targetName = "example";
    $anchorByName = $anchors->get_by_name($targetName, true);
    
    // Check if the anchor with the specified name was found in anchor elements and exists
    if ($anchorByName && $anchorByName->is_exist())
    {
        echo "\nFound anchor with name '" . $targetName . "' (exact match):\n";
        echo "Anchor href: " . $anchorByName->get_href() . "\n";
        echo "Anchor inner text: " . $anchorByName->get_inner_text() . "\n";
        echo "Anchor inner number: " . $anchorByName->inner_number . "\n";
    }
    else
    {
        echo "\nNo anchor with name '" . $targetName . "' (exact match) found in the collection\n";
    }
    
    // Try to find an anchor with a partial name match in anchor elements
    $targetName2 = "test";
    $anchorByName2 = $anchors->get_by_name($targetName2, false);
    
    // Check if the anchor with the specified name was found in anchor elements and exists
    if ($anchorByName2 && $anchorByName2->is_exist())
    {
        echo "\nFound anchor with name '" . $targetName2 . "' (partial match):\n";
        echo "Anchor href: " . $anchorByName2->get_href() . "\n";
        echo "Anchor inner text: " . $anchorByName2->get_inner_text() . "\n";
        echo "Anchor inner number: " . $anchorByName2->inner_number . "\n";
    }
    else
    {
        echo "\nNo anchor with name '" . $targetName2 . "' (partial match) found in the collection\n";
    }
    
    // Try to find an anchor with a non-existent name in anchor elements (exact match)
    $nonExistentName = "nonexistent";
    $anchorByNonExistentName = $anchors->get_by_name($nonExistentName, true);
    
    // Check if the anchor with the non-existent name was found in anchor elements and exists
    if ($anchorByNonExistentName && $anchorByNonExistentName->is_exist())
    {
        echo "\nUnexpectedly found anchor with name '" . $nonExistentName . "'\n";
    }
    else
    {
        echo "\nAs expected, no anchor with name '" . $nonExistentName . "' found in the collection\n";
    }
    
    // Display all anchor names in the collection for reference
    echo "\nAll anchor names in the collection:\n";
    for ($k = 0; $k < $anchors->count(); $k++)
    {
        $currentAnchor = $anchors->get($k);
        
        if ($currentAnchor && $currentAnchor->is_exist())
        {
            $anchorName = $currentAnchor->get_name();
            $anchorInnerText = $currentAnchor->get_inner_text();
            
            echo "Anchor #" . ($k + 1) . ": Name = '" . $anchorName . "', Text = '" . $anchorInnerText . "'\n";
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