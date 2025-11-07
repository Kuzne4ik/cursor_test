<?php

// Scenario: Get all elements by alt attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with a specific alt attribute within that collection
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

// Example: Get all image elements and then find all images with a specific alt attribute within that collection

// Get all image elements on the page
$images = DOM::$image->get_all();

// Check that we have found at least one image
if ($images->count() > 0) {
    echo "Found " . $images->count() . " image elements\n";

    // Try to find all images with a specific alt (exact match)
    $targetAlt = "Example Image";
    $imagesByAlt = $images->get_all_by_alt($targetAlt, true);

    // Check if any images with the specified alt were found
    if ($imagesByAlt->count() > 0) {
        echo "\nFound " . $imagesByAlt->count() . " image elements with alt '" . $targetAlt . "' (exact match):\n";

        // Process each found image
        for ($i = 0; $i < $imagesByAlt->count(); $i++) {
            $currentImage = $imagesByAlt->get($i);

            if ($currentImage && $currentImage->is_exist()) {
                echo "\nImage #" . ($i + 1) . " with alt '" . $targetAlt . "':\n";
                echo "Image src: " . $currentImage->get_src() . "\n";
                echo "Image inner number: " . $currentImage->inner_number . "\n";
                echo "Image width: " . $currentImage->get_width() . "\n";
                echo "Image height: " . $currentImage->get_height() . "\n";
            }
        }
    } else {
        echo "\nNo image elements with alt '" . $targetAlt . "' (exact match) found in the collection\n";
    }

    // Try to find all images with a partial alt match
    $partialAlt = "Example";
    $imagesByPartialAlt = $images->get_all_by_alt($partialAlt, false);

    // Check if any images with the partial alt were found
    if ($imagesByPartialAlt->count() > 0) {
        echo "\nFound " . $imagesByPartialAlt->count() . " image elements with partial alt '" . $partialAlt . "':\n";

        // Process each found image
        for ($i = 0; $i < $imagesByPartialAlt->count(); $i++) {
            $currentImage = $imagesByPartialAlt->get($i);

            if ($currentImage && $currentImage->is_exist()) {
                echo "\nImage #" . ($i + 1) . " with partial alt '" . $partialAlt . "':\n";
                echo "Image src: " . $currentImage->get_src() . "\n";
                echo "Image inner number: " . $currentImage->inner_number . "\n";
                echo "Full alt: " . $currentImage->get_alt() . "\n";
            }
        }
    } else {
        echo "\nNo image elements with partial alt '" . $partialAlt . "' found in the collection\n";
    }

}
// Stop the application
WINDOW::$app->quit();
?>