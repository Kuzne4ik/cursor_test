<?php

// Scenario: Get elements by src attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their src attribute within that collection
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

// Example: Get all image elements and then find specific images by their src attribute within that collection

// Get all image elements on the page
$images = DOM::$image->get_all();

// Check that we have found at least one image
if ($images->count() > 0)
{
    echo "Found " . $images->count() . " image elements\n";
    
    // Try to find an image with a specific src (exact match) in image elements
    $targetSrc = "example.jpg";
    $imageBySrc = $images->get_by_src($targetSrc, true);
    
    // Check if the image with the specified src was found in image elements and exists
    if ($imageBySrc && $imageBySrc->is_exist())
    {
        echo "\nFound image with src '" . $targetSrc . "' (exact match):\n";
        echo "Image alt: " . $imageBySrc->get_alt() . "\n";
        echo "Image inner number: " . $imageBySrc->inner_number . "\n";
        echo "Image width: " . $imageBySrc->get_width() . "\n";
        echo "Image height: " . $imageBySrc->get_height() . "\n";
    }
    else
    {
        echo "\nNo image with src '" . $targetSrc . "' (exact match) found in the collection\n";
    }
    
    // Try to find an image with a partial src match in image elements
    $partialSrc = "example";
    $imageByPartialSrc = $images->get_by_src($partialSrc, false);
    
    // Check if the image with the partial src was found in image elements and exists
    if ($imageByPartialSrc && $imageByPartialSrc->is_exist())
    {
        echo "\nFound image with partial src '" . $partialSrc . "':\n";
        echo "Image alt: " . $imageByPartialSrc->get_alt() . "\n";
        echo "Image inner number: " . $imageByPartialSrc->inner_number . "\n";
        echo "Full src: " . $imageByPartialSrc->get_src() . "\n";
    }
    else
    {
        echo "\nNo image with partial src '" . $partialSrc . "' found in the collection\n";
    }

    // Try to find an image with a non-existent src in image elements
    $nonExistentSrc = "nonexistent.jpg";
    $imageByNonExistentSrc = $images->get_by_src($nonExistentSrc, true);
    
    // Check if the image with the non-existent src was found in image elements and exists
    if ($imageByNonExistentSrc && $imageByNonExistentSrc->is_exist())
    {
        echo "\nUnexpectedly found image with src '" . $nonExistentSrc . "'\n";
    }
    else
    {
        echo "\nAs expected, no image with src '" . $nonExistentSrc . "' found in the collection\n";
    }
    
    // Display all image srcs in the collection for reference
    echo "\nAll image srcs in the collection:\n";
    for ($k = 0; $k < $images->count(); $k++)
    {
        $currentImage = $images->get($k);
        
        if ($currentImage && $currentImage->is_exist())
        {
            $imageSrc = $currentImage->get_src();
            $imageAlt = $currentImage->get_alt();
            
            echo "Image #" . ($k + 1) . ": Src = '" . $imageSrc . "', Alt = '" . $imageAlt . "'\n";
        }
    }
}
else
{
    echo "No image elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>