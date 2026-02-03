<?php

// Scenario: Get alt attributes for a collection of image elements
// Description: This example demonstrates how to get a collection of image elements and retrieve alt attribute for each image
// Classes used: XHEInterfaces, XHEImage, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example: Get all image elements and retrieve alt attribute for each image

// Get all image elements on the page
$images = DOM::$image->get_all();

// Check that we have found at least one image
if ($images->count() > 0)
{
    echo "Found " . $images->count() . " image elements\n";
    
    // Get alt attributes for all image elements
    $alts = $images->get_alt();
    
    // Display alt attributes
    echo "Alt attributes for all images:\n";
    foreach ($alts as $index => $alt) {
        echo "Image " . ($index + 1) . ": " . $alt . "\n";
    }
}
else
{
    echo "No image elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>