<?php

// Scenario: Take screenshots of a collection of elements
// Description: This example demonstrates how to get a collection of elements and take screenshots of each element
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
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example: Get all image elements and take screenshots of each image

// Get all image elements on the page
$images = DOM::$image->get_all();

// Check that we have found at least one image
if ($images->get_length() > 0)
{
    echo "Found " . $images->get_length() . " image elements\n";
    
    // Define the path for saving screenshots
    $screenshotPath = "screenshots/";
    
    // Create screenshots directory if it doesn't exist
    if (!file_exists($screenshotPath)) {
        mkdir($screenshotPath, 0777, true);
    }
    
    // Take screenshots of all image elements
    $results = $images->screenshot($screenshotPath);
    
    // Check if screenshots were taken successfully for all images
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully took screenshots for " . $successCount . " out of " . $images->get_length() . " images\n";
    echo "Screenshots saved to: " . realpath($screenshotPath) . "\n";
}
else
{
    echo "No image elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>