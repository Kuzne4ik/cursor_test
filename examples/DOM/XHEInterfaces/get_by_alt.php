<?php

// Scenario: Get elements by alt attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their alt attribute within that collection
// Classes used: XHEInterfaces, XHEImage, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "images.html");

// Example: Get all image elements and then find specific images by their alt attribute within that collection

// Get all image elements on the page
$images = DOM::$image->get_all();

// Check that we have found at least one image
if ($images->count() > 0)
{
    echo "Found " . $images->count() . " image elements\n";
    
    // Try to find an image with a specific alt (exact match) in image elements
    $targetAlt = "Example Image";
    $imageByAlt = $images->get_by_alt($targetAlt, true);
    
    // Check if the image with the specified alt was found
    if ($imageByAlt && $imageByAlt->is_exist())
    {
        echo "\nFound image with alt '" . $targetAlt . "' (exact match):\n";
        echo "Image src: " . $imageByAlt->get_src() . "\n";
        echo "Image inner number: " . $imageByAlt->inner_number . "\n";
        echo "Image width: " . $imageByAlt->get_width() . "\n";
        echo "Image height: " . $imageByAlt->get_height() . "\n";
    }
    else
    {
        echo "\nNo image with alt '" . $targetAlt . "' (exact match) found in the collection\n";
    }
    
    // Try to find an image with a partial alt match in image elements
    $partialAlt = "Example";
    $imageByPartialAlt = $images->get_by_alt($partialAlt, false);
    
    // Check if the image with the partial alt was found
    if ($imageByPartialAlt && $imageByPartialAlt->is_exist())
    {
        echo "\nFound image with partial alt '" . $partialAlt . "':\n";
        echo "Image src: " . $imageByPartialAlt->get_src() . "\n";
        echo "Image inner number: " . $imageByPartialAlt->inner_number . "\n";
        echo "Full alt: " . $imageByPartialAlt->get_alt() . "\n";
        
        // Get the parent element of the found image
        $parentElement = $imageByPartialAlt->get_parent();
        
        if ($parentElement->is_exist())
        {
            echo "Parent element exists\n";
        }
    }
    else
    {
        echo "\nNo image with partial alt '" . $partialAlt . "' found in the collection\n";
    }

}
else
{
    echo "No image elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>