<?php

// Scenario: Get all elements by src attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with a specific src attribute within that collection
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

// Example: Get all image elements and then find all images with a specific src attribute within that collection

// Get all image elements on the page
$images = DOM::$image->get_all();

// Check that we have found at least one image
if ($images->count() > 0)
{
    echo "Found " . $images->count() . " image elements\n";
    
    // Try to find all images with a specific src (exact match)
    $targetSrc = "example.jpg";
    $imagesBySrc = $images->get_all_by_src($targetSrc, true);
    
    // Check if any images with the specified src were found
    if ($imagesBySrc->count() > 0)
    {
        echo "\nFound " . $imagesBySrc->count() . " image elements with src '" . $targetSrc . "' (exact match):\n";
        
        // Process each found image
        for ($i = 0; $i < $imagesBySrc->count(); $i++)
        {
            $currentImage = $imagesBySrc->get($i);
            
            if ($currentImage->is_exist())
            {
                echo "\nImage #" . ($i + 1) . " with src '" . $targetSrc . "':\n";
                echo "Image alt: " . $currentImage->get_alt() . "\n";
                echo "Image inner number: " . $currentImage->inner_number . "\n";
                echo "Image width: " . $currentImage->get_width() . "\n";
                echo "Image height: " . $currentImage->get_height() . "\n";
            }
        }
    }
    else
    {
        echo "\nNo image elements with src '" . $targetSrc . "' (exact match) found in the collection\n";
    }
    
    // Try to find all images with a partial src match
    $partialSrc = "example";
    $imagesByPartialSrc = $images->get_all_by_src($partialSrc, false);
    
    // Check if any images with the partial src were found
    if ($imagesByPartialSrc->count() > 0)
    {
        echo "\nFound " . $imagesByPartialSrc->count() . " image elements with partial src '" . $partialSrc . "':\n";
        
        // Process each found image
        for ($i = 0; $i < $imagesByPartialSrc->count(); $i++)
        {
            $currentImage = $imagesByPartialSrc->get($i);
            
            if ($currentImage && $currentImage->is_exist())
            {
                echo "\nImage #" . ($i + 1) . " with partial src '" . $partialSrc . "':\n";
                echo "Image alt: " . $currentImage->get_alt() . "\n";
                echo "Image inner number: " . $currentImage->inner_number . "\n";
                echo "Full src: " . $currentImage->get_src() . "\n";
            }
        }
    }
    else
    {
        echo "\nNo image elements with partial src '" . $partialSrc . "' found in the collection\n";
    }
    
    // Try to find all images with another src
    $targetSrc2 = "test.png";
    $imagesBySrc2 = $images->get_all_by_src($targetSrc2, true);
    
    // Check if any images with the specified src were found
    if ($imagesBySrc2->count() > 0)
    {
        echo "\nFound " . $imagesBySrc2->count() . " image elements with src '" . $targetSrc2 . "':\n";
        
        // Process each found image
        for ($i = 0; $i < $imagesBySrc2->count(); $i++)
        {
            $currentImage = $imagesBySrc2->get($i);
            
            if ($currentImage->is_exist())
            {
                echo "\nImage #" . ($i + 1) . " with src '" . $targetSrc2 . "':\n";
                echo "Image alt: " . $currentImage->get_alt() . "\n";
                echo "Image inner number: " . $currentImage->inner_number . "\n";
            }
        }
    }
    else
    {
        echo "\nNo image elements with src '" . $targetSrc2 . "' found in the collection\n";
    }
}
else
{
    echo "No image elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>